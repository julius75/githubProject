<template>
    <div>
        <div class="col-md-3">
            Github
        </div>
        <div class="col-md-6">
            <table class="table table-condensed">

                <thead>
                <th>
                    Branches
                </th>
                </thead>
                <tbody v-for="branch in branches">
                <tr>
                    <td style="font-weight: bold; font-size: xx-large">
                        {{branch.name}}
                    </td>
                    <td>
                        <button @click="new_branch(branch.name,branch.commit.sha)" class="btn btn-primary">Create branch</button>
                    </td>
                </tr>

                </tbody>

            </table>
        </div>
        <div v-if="branch_off">
            <form @submit.prevent="newBranch" method="post">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control col-md-4" placeholder="Name" v-model="name" required/>
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Create Branch</button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return{
                branches: [],
                branch_off: false,
                names: '',
                name: '',
                sha: ''
            }
        },
        props: ['user','repo']
        ,
        mounted(){
            this.GitHubAPI.get('/repos/'+this.user+'/'+this.repo+'/branches', {}, (response) => {
                this.branches=response.body
            })
        },
        methods:{
            //create new branch
            new_branch: function ($name,$sha) {
                this.branch_off=true
                this.names=$name
                this.sha=$sha
            },
            newBranch: function () {
                let data={
                    "ref": "refs/heads/"+this.name,
                    "sha": this.sha
                }
                this.GitHubAPI.post('/repos/'+this.username+'/'+this.repo_name+'/git/refs', data, (response) => {
                    this.branch_off=false;
                    this.onmounted()
                })
            }

        }
    }
</script>