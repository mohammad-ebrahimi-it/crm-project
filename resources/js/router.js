let Index = require('./components/Index.vue').default;
let Employee = require('./components/Employee.vue').default;
let Customer = require('./components/Customers.vue').default;
let Prospects = require('./components/Prospects.vue').default;
let EmployeeProspect = require('./components/EmployeeProspect.vue').default;
let CustomerEmployee = require('./components/CustomerEmployee.vue').default;

export const routes = [
    {path: '/', component: Index},
    {path: '/employee', component: Employee},
    {path: '/customer', component: Customer},
    {path: '/prospect', component: Prospects},
    {path: '/employeeProspect', component:EmployeeProspect },
    {path: '/customerEmployee', component: CustomerEmployee}
]
