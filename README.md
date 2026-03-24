# web-development-workflow
# Modern Web Development Workflow

```mermaid
flowchart LR

%% Main Flow
A[Local Git Repository] --> B[GitHub / GitLab / Bitbucket]
B --> D[CI/CD<br>Testing & Linting]
D --> E[Hosting<br>Website + DB]
E --> G[Domain & DNS]
G --> H[Web Browser]

%% Side Flows
A --> C[MySQL / PostgreSQL<br>Local Database]
A --> F[FTP]
F --> E

%% Styling
classDef green fill:#2ecc71,color:#fff,stroke:#333;
classDef blue fill:#3498db,color:#fff,stroke:#333;
classDef dark fill:#34495e,color:#fff,stroke:#333;
classDef yellow fill:#f1c40f,color:#000,stroke:#333;
classDef red fill:#e74c3c,color:#fff,stroke:#333;

class A,C green;
class B,D,E,G blue;
class F red;
class H yellow;
```
