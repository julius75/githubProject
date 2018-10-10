<template>

    <div >
        Repository  {{this.repo}}
            <h4>Edit Repository</h4>
    <form>
        <div class="form-group" method="post">
            <label for="repo">Repo Name</label>
            <input type="text" class="form-control" id="repo"placeholder="Enter name" v-model="name">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" checked>
            <label class="form-check-label" >
                Public
            </label>
        </div>
        <button type="submit" class="btn btn-primary" @click="editRepo()">Submit</button>
    </form>
    </div>
</template>
<script>
    export default {
        mounted(){
        },
        props: ['repo','user'],

        data(){
            return{
                name: '',
                myGitHubData: {},

            }
        },
        methods:
            {
                //update a repository
                editRepo: function () {
                    console.log('here')
                    let repodetails = {
                        "name": this.name,
                        "homepage": "https://github.com",
                        "public": true,
                        "has_issues": true,
                        "has_projects": true,
                        "has_wiki": true
                    }
                    this.GitHubAPI.post('/repos/'+this.user+'/'+this.repo, repodetails, (response) => {
                        window.location.href = "http://127.0.0.1:8000/home"
                    })
                }
            }

    }
</script>