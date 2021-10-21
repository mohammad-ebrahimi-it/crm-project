<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">


                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Employee Prospect</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="clearModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="alert alert-success" v-if="success.length>0">{{ success }}</p>
                    <div class="form-group">

                        <label for="employee_id"> select Employee</label>
                        <select multiple="" class="form-control" id="employee_id"
                            v-model="employee_id"
                        >
                            <option
                                name="employee_id"
                                v-for="employee of employees" :key="employee.employee_id"
                            v-bind:value="employee.employee_id"
                            >
                                <span>{{employee.emp_name}}</span>

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
                            </option>

                        </select>
                        <ul v-if="error" class="list-unstyled">
                            <li v-for="err of error" class="alert alert-danger">{{ err }}</li>
                        </ul>
                    </div>

                <div class="form-group">
                    <label for="prospect_id">Example multiple select</label>
                    <select multiple="" class="form-control" id="prospect_id"
                        v-model="prospect_id"
                    >
                        <option v-for="prospect of prospects" :key="prospect.prospect_id"
                        name="prospect_id"
                                v-bind:value="prospect.prospect_id"
                        >{{prospect.pro_name}}</option>

                    </select>
                        <ul v-if="error" class="list-unstyled">
                            <li v-for="err of error" class="alert alert-danger">{{ err }}</li>
                        </ul>
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="clearModal">Close
                    </button>
                    <button type="button" class="btn btn-primary" v-on:click="add">save</button>
                </div>

            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            error: [],
            employee_id: [],
            prospect_id: [],
            employees: '',
            prospects:'',
            success: ''
        }
    },
    created() {
        axios.get('http://localhost/crm-project/public/api/get/employees')
            .then((response) => {
                this.employees = response.data
            }).catch((error) => {
            console.log(error);
        });
        axios.get('http://localhost/crm-project/public/api/get/prospect')
        .then((response) => {
            this.prospects = response.data
        }).catch((error) => {
            console.log(error);
        })
    },
    methods: {
        add() {
            axios.post('http://localhost/crm-project/public/empPros/store', {
                prospect_id: this.prospect_id,
                employee_id: this.employee_id,
            })
                .then(data => {
                    this.$emit('insertData', data);
                    this.success = 'successfully';
                })
                .catch((error) => {
                    this.error = error.response.data.errors.name;
                })
            this.employee_id = [];
            this.prospect_id = [];
            this.error = [];
        },
        clearModal() {
            this.error = [];
            this.employee_id = [];
            this.prospect_id = [];
            this.success = '';

        }
    }


}
</script>
