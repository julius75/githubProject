<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header"> <ul v-for="repo in myGitHubData" v-on:click="openRepo()">
                        {{ repo.name}}
                        </ul></div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['repo'],
        data () {
            return {
                myGitHubData: {}
            }
        },
        mounted:function () {
            this.GitHubAPI.get('/user/repos', {}, (response)=>{
               this.myGitHubData= response.body
                console.log(response.body)
            } )
        },
        methods:{
            openRepo:function () {
                
            }
        }


    }
</script>
