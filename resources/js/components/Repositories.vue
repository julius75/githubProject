<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header"  v-for="repo in myGitHubData">
                        <p @click="" v-if="repo.type=='file'">file: {{repo.name}}</p>
                        <p @click="openDir(repo.name)" repo.type=='dir'">dir: {{repo.name}}</p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                myGitHubData: {},
                url: '/repos/'+this.user+'/'+this.repo+'/contents'
            }
        },
        props:['user','repo'],

        mounted:function () {
            this.GitHubAPI.get('/repos/'+this.user+'/'+this.repo+'/contents', {}, (response)=>{
                this.myGitHubData=response.body
                console.log(response.body)
            })

        },
        methods:{
            openDir:function ($repo) {
                    this.myGitHubData={}
                    this.url=this.url+'/'+$repo;
                    this.GitHubAPI.get(this.url, {}, [this.myGitHubData, 'repositories'])

        }}

    }
</script>
