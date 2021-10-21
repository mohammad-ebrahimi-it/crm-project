<template>
    <div>
        <div id="container-wrapper" class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4"><h1 class="h3 mb-0 text-gray-800">
                Employee Customer Table</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <router-link to="/">Home</router-link>
                    </li>
                    <li class="breadcrumb-item">Tables</li>
                    <li aria-current="page" class="breadcrumb-item active">customer employee</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"><h6
                            class="m-0 font-weight-bold text-primary">DataTables Employee Customer</h6></div>
                        <div class="table-responsive p-3">
                            <div id="dataTableHover_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="dataTableHover" role="grid" aria-describedby="dataTableHover_info"
                                               class="table align-items-center table-flush table-hover dataTable">
                                            <thead class="thead-light">
                                            <tr role="row">
                                                <th tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    class="sorting_asc" style="width: 181.6px;">Id
                                                </th>
                                                <th tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending"
                                                    class="sorting" style="width: 285.25px;">Name Employee
                                                </th>
                                                <th tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    class="sorting" style="width: 135.317px;">Department
                                                </th>
                                                <th tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    class="sorting" style="width: 135.317px;">Phone Number Employee
                                                </th>
                                                <th tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1"
                                                    aria-label="Age: activate to sort column ascending" class="sorting"
                                                    style="width: 54.6333px;">Customer Name
                                                </th>


                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">id</th>
                                                <th rowspan="1" colspan="1">Name Employee</th>
                                                <th rowspan="1" colspan="1">Department Employee</th>
                                                <th rowspan="1" colspan="1">Phone Number Employee</th>
                                                <th rowspan="1" colspan="1">Customer Name</th>


                                            </tr>
                                            </tfoot>
                                            <tbody>

                                            <tr role="row" class="odd" v-for="empPro of empPros"
                                            >
                                                <td class="sorting_1">{{ containers++ }}</td>
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
                                                <td>{{ empPro.phone_number }}</td>
                                                <td>{{ empPro.cus_name }}</td>

                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">
                                    Add +
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div id="model">
                <AddCusEmp @insertData="refreshCustomer"></AddCusEmp>
            </div>
        </div>

    </div>
</template>
<script>
import AddCusEmp from "./AddCusEmp";
let containers = 1
export default {

    components: {AddCusEmp},
    data() {
        return {
            empPros: null,
        }

    },

    created() {
        axios
            .get('http://localhost/crm-project/public/cusEmp/get')
            .then((response) => {
                this.empPros = response.data;
                this.containers = containers;

            }).catch((error) => {
            console.log(error);
        });

    },
    methods: {
        refreshCustomer() {
            window.location.reload();

        }
    }

}
</script>

