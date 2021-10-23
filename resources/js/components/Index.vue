<template>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>

        <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Customers</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ customers.length }}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                    <span>Since last month</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Employees</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ employees.length }}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                                    <span>Since last years</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-tie fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Prospects</div>
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ prospects.length }}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                    <span>Since last month</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-paper-plane fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">prospect employee</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ empPros.length }}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                                    <span>Since yesterday</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="far fa-paper-plane fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-lg-7 mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Employee prospect</h6>
                        <router-link to="/employeeProspect" class="m-0 float-right btn btn-danger btn-sm">View More <i
                            class="fas fa-chevron-right"></i></router-link>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>E name</th>
                                <th>Department</th>
                                <th>Phone Number</th>
                                <th>P name</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="empPro of empPros">
                                <td>{{ container++ }}</td>
                                <td>{{ empPro.emp_name }}</td>
                                <td>
                                    <span
                                        class="badge badge-primary"
                                        v-if="empPro.department === 'Organizational strategy'">
                                        {{ empPro.department }}</span>

                                    <span class="badge badge-success"
                                          v-if="empPro.department === 'human resources'"
                                    >{{ empPro.department }}</span>


                                    <span class="badge badge-warning"
                                          v-if="empPro.department ==='Management systems'">{{
                                            empPro.department
                                        }}</span>


                                    <span class="badge badge-light"
                                          v-if="empPro.department ==='Policy making'"
                                    >{{ empPro.department }}</span>


                                    <span class="badge badge-info"
                                          v-if="empPro.department ==='organizational behavior'"
                                    >{{ empPro.department }}</span>


                                    <span class="badge badge-danger"
                                          v-if="empPro.department ==='Organizational Structure'"
                                    >{{ empPro.department }}</span>
                                </td>
                                <td><span class="badge badge-success">{{ empPro.phone_number }}</span></td>
                                <td><a href="#" class="btn btn-sm btn-primary">{{ empPro.pro_name }}</a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <!-- Message From Customer-->

        </div>
        <!--Row-->

        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Do you like this template ? you can download from <a
                    href="https://github.com/indrijunanda/RuangAdmin" class="btn btn-primary btn-sm" target="_blank"><i
                    class="fab fa-fw fa-github"></i>&nbsp;GitHub</a></p>
            </div>
        </div>

        <!-- Modal Logout -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to logout?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <a href="login.html" class="btn btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
let container = 1
export default {
    data() {
        return {
            customers: null,
            employees: null,
            prospects: null,
            empPros: null,

        }
    },
    created() {
        axios
            .get('http://localhost/crm-project/public/api/get/customers')
            .then((response) => {
                this.customers = response.data;
            }).catch((error) => {
            console.log(error);
        });

        axios.get('http://localhost/crm-project/public/api/get/employees')
            .then((response) => {
                this.employees = response.data
            })
            .catch((error) => {
                console.log(error);
            });
        axios
            .get('http://localhost/crm-project/public/prospect/get')
            .then((response) => {
                this.prospects = response.data
            }).catch((error) => {
            console.log(error);
        });
        axios
            .get('http://localhost/crm-project/public/empPros/get')
            .then((response) => {
                this.empPros = response.data;
                this.container = container;

            }).catch((error) => {
            console.log(error);
        });

    },
}
</script>
