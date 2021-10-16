<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">


                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="clearModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="alert alert-success" v-if="success.length>0">{{ success }}</p>
                    <div class="form-group">
                        <label for="emp_name">Name</label>
                        <input type="text" class="form-control" id="emp_name"
                               placeholder="Example: ali"
                               name="emp_name"
                               v-model="emp_name"
                        >
                        <ul v-if="error" class="list-unstyled">
                            <li v-for="err of error" class="alert alert-danger">{{ err }}</li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <label for="department">department</label>
                        <select class="form-control form-control-sm mb-3" id="department"

                                v-model="department"
                        >
                            <option selected>....</option>
                            <option name="department" value="human resources">human resources</option>
                            <option name="department" value="Management systems">Management systems</option>
                            <option name="department" value="Policy making">Policy making</option>
                            <option name="department" value="organizational behavior">organizational behavior</option>
                            <option name="department" value="Organizational Structure">Organizational Structure</option>
                            <option name="department" value="Organizational strategy">Organizational strategy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number"
                               placeholder="Example: 9900723195"
                               name="phone_number"
                               v-model="phone_number"
                        >
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
            emp_name: '',
            department: '',
            phone_number: '',
            success: ''
        }
    },
    methods: {
        add() {
            axios.post('http://localhost/crm-project/public/employee/store', {
                emp_name: this.emp_name,
                department: this.department,
                phone_number: this.phone_number,
            })
                .then(data => {
                    this.$emit('insertData', data);
                    this.success = 'successfully';
                })
                .catch((error) => {
                    this.error = error.response.data.errors.name;
                })
            this.emp_name = '';
            this.department = '';
            this.phone_number = '';
            this.error = [];
        },
        clearModal() {
            this.error = [];
            this.emp_name = '';
            this.department = '';
            this.phone_number = '';
            this.success = '';

        }
    }

}
</script>
