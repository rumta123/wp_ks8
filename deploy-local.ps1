Write-Host "🚀 CI/CD Pipeline Simulation" -ForegroundColor Cyan
Write-Host "================================" -ForegroundColor Cyan

# Этап 1: Checkout
Write-Host "[1/4] Checkout code..." -ForegroundColor Yellow
git pull 2>$null
Write-Host "✓ Code checked out" -ForegroundColor Green

# Этап 2: Validate
Write-Host "[2/4] Validate Kubernetes manifests..." -ForegroundColor Yellow
kubectl apply -f k8s-manifests/ --dry-run=client
if ($LASTEXITCODE -eq 0) {
    Write-Host "✓ Manifests validated successfully" -ForegroundColor Green
} else {
    Write-Host "✗ Validation failed" -ForegroundColor Red
    exit 1
}

# Этап 3: Deploy
Write-Host "[3/4] Deploy to cluster..." -ForegroundColor Yellow
kubectl apply -f k8s-manifests/
Write-Host "✓ Deployment applied" -ForegroundColor Green

# Этап 4: Verify
Write-Host "[4/4] Verify rollout status..." -ForegroundColor Yellow
kubectl rollout status deployment/wordpress --timeout=120s
if ($LASTEXITCODE -eq 0) {
    Write-Host "================================" -ForegroundColor Cyan
    Write-Host "✅ CI/CD Pipeline Completed Successfully!" -ForegroundColor Green
    Write-Host "WordPress deployed to minikube cluster" -ForegroundColor Green
    Write-Host "Access: http://localhost:8080" -ForegroundColor Green
} else {
    Write-Host "✗ Rollout failed" -ForegroundColor Red
    exit 1
}