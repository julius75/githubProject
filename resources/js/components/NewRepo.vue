<template>
    <div>
        <h2>Create a new repository</h2>
        <form>
            <div class="form-group" method="post">
                <label for="repo">Repo Name</label>
                <input type="text" v-model.lazy="name" class="form-control" id="repo"placeholder="Enter name">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" checked>
                <label class="form-check-label" >
                    Public
                </label>
            </div>

            <button type="submit" class="btn btn-primary" @click="creates()">Submit</button>
        </form>
                <div id="preview">
                    <h3>show repo details</h3>
                    <p>name:{{name}}</p>

                </div>
            </div>
</template>

<script>
    export default {
        mounted(){

        },
        data() {
            return {
                name: "",
                status: true,
                myGitHubData: {},

            }
        },
        methods: {
            creates: function () {
                let repodetails = {
                    "name": this.name,
                    "homepage": "https://github.com",
                    "public": true,
                    "has_issues": true,
                    "has_projects": true,
                    "has_wiki": true

                }
                this.GitHubAPI.post('/user/repos', repodetails, (response) => {
                    window.location.href = "http://127.0.0.1:8000/home"

                })


            }
        }
    }
</script>
<!--<style>-->
    <!--body{-->
        <!--margin: 0;-->
        <!--font-family: 'Nunito', sans-serif;-->
    <!--}-->
<!--</style>-->
