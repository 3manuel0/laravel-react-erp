# Functional Requirements Document (FRD): Full-Stack ERP System

## 1. Project Identification

**Project Name:** Nexus ERP  
**Developer:** [Your Name]  
**Stack:** Laravel 11 (API) + React 18 (SPA)  
**Objective:** A professional-grade ERP to manage Human Resources, Inventory, and Financial transactions.

---

## 2. Technical Stack & Architecture

To demonstrate full-stack mastery, the project uses a **decoupled architecture**:

- **Backend:** PHP Laravel (RESTful API)
  - _Features:_ Eloquent ORM, Sanctum Auth, Form Requests (Validation), API Resources.
- **Frontend:** ReactJS (Vite)
  - _Features:_ Tailwind CSS, Axios, React Router v6, Lucide Icons.
- **Database:** MySQL / PostgreSQL.

---

## 3. Functional Modules & Requirements

### 3.1 Employee & Attendance Management (HRM)

- **Employee Directory:** Create, edit, and archive employee profiles (Full name, Role, Salary, Date of joining).
- **Attendance Tracking:** \* Clock-in/Clock-out functionality.
  - Automatic status calculation (Present, Late, Absent).
  - Backend logic to prevent double clock-ins on the same day.

### 3.2 Inventory (Stock) Management

- **Product Registry:** Manage items with SKU, Category, and Unit Price.
- **Stock Control:** \* Real-time stock level updates.
  - Low-stock visual alerts (Threshold indicators).
  - Movement history (Logging who added/removed stock).

### 3.3 Supplier (Provider) Management

- **Provider Database:** Contact info, address, and specialized product categories.
- **Relational Link:** Ability to view all products supplied by a specific provider.

### 3.4 Invoicing & Billing

- **Invoice Generator:** Create digital invoices linked to specific customers/employees.
- **Financial Logic:** Automatic calculation of Subtotals, VAT (Tax), and Discounts.
- **Status Management:** Track payments (Draft, Sent, Paid, Overdue).

---

## 4. Database Schema (Relational Design)

- **Users:** `id, name, email, password, role_id`
- **Employees:** `id, user_id, salary, hire_date, position`
- **Attendance:** `id, employee_id, date, clock_in, clock_out, status`
- **Suppliers:** `id, company_name, email, phone, address`
- **Products:** `id, supplier_id, name, sku, stock_quantity, price`
- **Invoices:** `id, invoice_number, total_amount, tax, status, created_at`

---

## 5. Security & Constraints

- **Authentication:** JWT or Laravel Sanctum tokens for secure API access.
- **Authorization:** Middleware to ensure a "Warehouse Manager" cannot access "Salaries."
- **Data Integrity:** Foreign key constraints to prevent orphaned data (e.g., deleting a supplier removes their link to products).

---

## 6. API Endpoints (Planned)

| Method | Endpoint                   | Description                      |
| :----- | :------------------------- | :------------------------------- |
| `POST` | `/api/login`               | Authenticate user & return token |
| `GET`  | `/api/employees`           | Fetch all employee data          |
| `POST` | `/api/attendance/clock-in` | Record start time                |
| `GET`  | `/api/stock`               | View inventory levels            |
| `POST` | `/api/invoices`            | Generate a new invoice           |

---

## 7. Roadmap (Dev Phases)

1.  **Phase 1:** Backend API Setup & Database Migrations.
2.  **Phase 2:** Authentication (Sanctum) & Dashboard UI.
3.  **Phase 3:** HR & Attendance Logic.
4.  **Phase 4:** Inventory & Supplier CRUD.
5.  **Phase 5:** Invoicing System & PDF Export.

# Structure

```bash
laravel-react-erp/
├── backend/
├── frontend/
├── docker-compose.yml
├── .env
└── nginx/
    └── default.conf
```
