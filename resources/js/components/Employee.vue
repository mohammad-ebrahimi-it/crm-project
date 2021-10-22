<template>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Simple Tables</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active" aria-current="page">Employees Tables</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4">
                <!-- Simple Tables -->
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Employees </h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th> ID</th>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Department</th>
                                <th>delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="employee of employees" :key="employee.employee_id"
                                v-bind:data-id="employee.employee_id"
                            >
                                <td><a href="#">{{ employee.employee_id }}</a></td>
                                <td>{{ employee.emp_name }}</td>
                                <td>{{ employee.phone_number }}</td>
                                <td>
                                    <span
                                        class="badge badge-primary"
                                        v-if="employee.department === 'Organizational strategy'">
                                        {{ employee.department }}</span>

                                    <span class="badge badge-success"
                                          v-if="employee.department === 'human resources'"
                                    >{{ employee.department }}</span>


                                    <span class="badge badge-warning"
                                          v-if="employee.department ==='Management systems'">{{
                                            employee.department
                                        }}</span>


                                    <span class="badge badge-light" v-if="employee.department ==='Policy making'"
                                    >{{ employee.department }}</span>


                                    <span class="badge badge-info"
                                          v-if="employee.department ==='organizational behavior'"
                                    >{{ employee.department }}</span>


                                    <span class="badge badge-danger"
                                          v-if="employee.department ==='Organizational Structure'"
                                    >{{ employee.department }}</span>


                                </td>
                                <td>
                                    <a class="btn delete btn-danger" v-on:click="deleteEmp" href="#">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                            Add +
                        </button>
                        <addEmployee @insertData="reloadPage"></addEmployee>
                    </div>
                </div>

            </div>
        </div>
        <!--Row-->

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
import addEmployee from "./addEmployee";

export default {
    components: {addEmployee},
    data() {
        return {
            employees: null,
        }
    },
    created() {
        axios.get('http://localhost/crm-project/public/api/get/employees')
            .then((response) => {
                this.employees = response.data
            })
            .catch((error) => {
                console.log(error);
            })
    },
    methods: {
        reloadPage() {
            window.location.reload();
        },
        clear() {
            this.className = ''
        },
        deleteEmp() {
            swal({
                title: "warning!",
                text: "Are you sure delete item?",
                icon: "warning",
                buttons: ["no", "yes"],
                dangerMode: true,

            })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: `employee/delete/${$("a.delete").parent().parent().attr("data-id")}`,
                            method: "get",
                            success: function (response_id) {
                                $(`tr[data-id=${response_id}]`).remove();
                            }
                        });
                        swal("successfully ! your item is deleted", {
                            icon: "success",
                            buttons: "ok"
                        });
                    }
                })
        }
    }
}

</script>
