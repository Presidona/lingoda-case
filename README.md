# Symfony Demo Application Deployment in Kubernetes

This README outlines the process for deploying the Symfony Demo application within a Kubernetes environment. The procedure includes database setup, application deployment, database migrations, and auto-scaling implementation.

## Prerequisites

- A Kubernetes cluster
- `kubectl` CLI installed and configured to communicate with your cluster
- Docker image of the Symfony application ready in a registry

## Deployment Procedure

### Step 1: Create Namespace

Start by creating a dedicated namespace for your application.

```bash
kubectl apply -f namespace.yaml
```

### Step 2: Set Up the Database

Deploy PostgreSQL as the database for the Symfony application.

#### Persistent Volume Claim

Create a Persistent Volume Claim (PVC) for database storage persistence.

```bash
kubectl apply -f postgres-pvc.yaml
```

#### Deployment and Service

Deploy the PostgreSQL database and expose it within the cluster.

```bash
# Apply PostgreSQL Deployment
kubectl apply -f deployment.yaml

# Apply PostgreSQL Service
kubectl apply -f service.yaml
```

Make sure to adjust `deployment.yaml` and `service.yaml` if they contain more resources than just the PostgreSQL components.

### Step 3: Application Configuration

Configure the application using a ConfigMap for environment variables.

```bash
kubectl apply -f configmap.yaml
```

### Step 4: Deploy Symfony Application

Deploy your Symfony application to the Kubernetes cluster.

```bash
kubectl apply -f deployment.yaml
```

Expose the Symfony application through a service.

```bash
kubectl apply -f service.yaml
```

### Step 5: Database Migration

Execute database migrations using a Kubernetes job.

```bash
kubectl apply -f db-migration-job.yaml
```

### Step 6: Implement Auto-Scaling

Set up auto-scaling for the Symfony application pods based on CPU and memory usage.

```bash
kubectl apply -f hpa.yaml
```

## Accessing the Application

Determine the external IP or domain to access your Symfony application by querying the service.

```bash
kubectl get svc -n lingoda-app-ns
```
