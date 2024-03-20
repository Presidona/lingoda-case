# Symfony Demo Application Deployment in Kubernetes

This README provides a comprehensive guide to deploying the Symfony Demo application within a Kubernetes environment. This process encompasses everything from containerization to ensuring accessibility in a secure and scalable manner.

## Task 1: Deploy Symfony Demo App in Kubernetes

### Objective

To deploy the Symfony Demo application in a Kubernetes environment, showcasing best practices in containerization, deployment, and service exposure.

### Instructions

#### Step 1: Obtain the Symfony Demo Application

Clone the Symfony Demo application from its [GitHub repository](https://github.com/symfony/demo).

```bash
git clone https://github.com/symfony/demo.git lingoda-case
```

#### Step 2: Create Dockerfiles

Navigate into the cloned repository and create a `Dockerfile` to containerize the Symfony application.

Build your Docker image:

```bash
docker build -t symfony-demo .
```

Push the Docker image to a registry (Docker Hub, for example):

```bash
docker tag symfony-demo rimgbulldo/symfony-demo
docker push rimgbulldo/symfony-demo:latest
```

#### Step 3: Write Kubernetes Manifest Files

Create Kubernetes manifest files for deploying the containerized application. Ensure these files are structured to include deployments, services, and any necessary configuration maps or secrets for sensitive data.

#### Step 4: Deploy Application in Kubernetes

Ensure your Kubernetes cluster is up and running. For local development, Minikube is a suitable option. Start Minikube:

```bash
minikube start --memory 4096 --cpus 2
```

Create a dedicated namespace for your application:

```bash
kubectl apply -f namespace.yaml
```

Deploy the application and its database, ensuring you've configured secrets for sensitive information following best practices:

```bash
kubectl apply -f secret.yaml
kubectl apply -f deployment.yaml
kubectl apply -f service.yaml
```

#### Step 5: Access the Application

Once deployed, ensure the application is accessible. With Minikube, you can easily access the service:

```bash
minikube service list
```

Once your Symfony application is deployed, you can access it using Minikube. To find the URL for your service, use the following command:

```bash
minikube service lingoda-app-service --url -n lingoda-app-ns
```

This command will output a URL. Copy and paste this URL into your web browser to access your Symfony application.

## Task 2: Implement Database Migrations

### Objective

Enhance the Kubernetes deployment process by incorporating the capability to execute database migrations. This ensures the database schema is always in sync with the application's requirements without causing downtime or data loss.

### Instructions

#### Overview

Database migrations are crucial for evolving your application without interrupting its operation. For the Symfony Demo application deployed in Kubernetes, we utilize a Kubernetes Job to manage these migrations.

#### Prerequisites

Ensure you have completed Task 1, where the Symfony app and its PostgreSQL database are deployed within a Kubernetes environment.

#### Process

#### Step 1: Define the Kubernetes Job for Migrations

Create a Kubernetes Job manifest file (`db-migration-job.yaml`) that specifies the job to run the migration script. This job should:

- Use the same image as your application deployment.
- Specify the command to run the migration script.
- Use environment variables Secrets to configure the database connection.

#### Step 2: Deploy the Migration Job

After configuring the migration job, apply it to your Kubernetes cluster:

```bash
kubectl apply -f db-migration-job.yaml
```

This job will start a pod that runs your migration script once and then terminates. Kubernetes ensures that this job runs to completion before the pod is shut down.

#### Step 3: Monitoring and Verification

To verify the execution of your migrations, monitor the job's logs:

```bash
kubectl logs job/db-migration-job
```

Ensure that the migrations are applied successfully and no errors are reported.

#### Integration into Deployment Process

To seamlessly integrate database migrations into your deployment process:

- Always run the migration job before updating the deployment of your Symfony application.
- Ensure your application's deployment is paused or scaled down to avoid schema incompatibilities during the migration process.
- Once the migration job completes successfully, proceed with the application deployment.

This approach ensures that your database schema is always compatible with the application code, preventing downtime and preserving data integrity.

## Task 3: Scaling Concerns and Implementations

## Objective

The goal of this task is to ensure the Symfony application and its associated database can efficiently handle varying loads by implementing appropriate scaling strategies within a Kubernetes environment.

## Instructions

### Identifying Scaling Issues

Before implementing a scaling strategy, it's crucial to assess both the application and database layers for potential bottlenecks or performance issues under different load conditions. This involves monitoring metrics such as CPU usage, memory consumption, and request throughput.

### Implementing Scaling Strategies

Based on the needs identified in the assessment phase, choose between Vertical Pod Autoscaler (VPA) and Horizontal Pod Autoscaler (HPA) for the application layer. For databases that support replication and sharding, consider similar scaling strategies that align with the database's architecture.

#### Horizontal Pod Autoscaler (HPA)

For the Symfony application, HPA is chosen to dynamically adjust the number of pod replicas based on CPU and memory usage metrics. This approach allows the application to maintain performance under varying loads without manual intervention.

**Configuration:**

```yaml
apiVersion: autoscaling/v2beta2
kind: HorizontalPodAutoscaler
metadata:
  name: lingoda-app-hpa
  namespace: lingoda-app-ns
spec:
  scaleTargetRef:
    apiVersion: apps/v1
    kind: Deployment
    name: lingoda-app
  minReplicas: 1
  maxReplicas: 10
  metrics:
    - type: Resource
      resource:
        name: cpu
        target:
          type: Utilization
          averageUtilization: 80
    - type: Resource
      resource:
        name: memory
        target:
          type: Utilization
          averageUtilization: 80

```

This configuration instructs Kubernetes to scale the symfony-app deployment within the lingoda-app-ns namespace, keeping CPU and memory utilization around 80%. It allows the application to dynamically adjust its resource allocation, ensuring efficient operation under varying loads.

### Database Scaling

Database scaling often requires a more nuanced approach, including read replica scaling, sharding, or switching to a managed database service that automatically scales. For PostgreSQL, consider using replication to distribute read queries across multiple instances.

### Testing Scaling Implementation

Deploy the HPA resource and simulate different load conditions. Monitor the application's performance and observe how the number of pod replicas changes in response to the load.

### Deployment and Testing Instructions

1. Apply the HPA configuration:

```bash
kubectl apply -f hpa.yaml
```

2. Use `kubectl get hpa` to monitor the status of your HPA and observe changes in the number of replicas as load varies.

3. To simulate increased load, you might use a tool like Apache JMeter to send a high volume of requests to your application.

4. Observe how Kubernetes automatically scales the number of pods up and down in response to the load, ensuring optimal resource usage and application responsiveness.

5. For database scaling, if replication or sharding is implemented, monitor the database performance and replication lag to ensure queries are efficiently distributed without creating bottlenecks.

## Conclusion and Reflection

This README encapsulates my journey through deploying the Symfony Demo Application within a Kubernetes environment using Minikube. Throughout this process, I aimed not only to demonstrate technical proficiency but also to articulate the rationale behind each decision, aligning with Kubernetes' best practices.

**Choice Minikube:** Minikube was chosen to streamline local development, allowing for an easily replicable environment that closely mirrors production settings.

**Security and Scalability:** Implementing Secrets for sensitive data showcases a commitment to security best practices. The introduction of Horizontal Pod Autoscalers reflects a proactive approach to scalability, ensuring that the application can efficiently handle varying loads without manual intervention.

**Documentation and Deployment Instructions:** Providing clear, step-by-step instructions ensures that the deployment process is transparent and reproducible. This clarity not only demonstrates a structured approach to problem-solving but also facilitates collaboration and knowledge sharing.

**Continuous Learning and Improvement:** This project embodies the principle of continuous learning. Each step, from configuring persistent storage with PVCs to deploying autoscaling mechanisms, was an opportunity to delve deeper into Kubernetes' capabilities and to refine my approach based on best practices.

In conclusion, this exercise was more than a demonstration of technical skills; it was an exploration of the strategic thinking required for modern cloud-native application deployment. My choices were driven by a desire to balance performance, security, and maintainability, laying a solid foundation for future enhancements and scalability.