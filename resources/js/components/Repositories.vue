<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header"  v-for="repo in myGitHubData">
                        <p @click="" v-if="repo.type=='file'">file: {{repo.name}}</p>
                        <p @click="openDir(repo.name)" repo.type=='dir'">dir: {{repo.name}}</p>

                    </div>

                    <!--<div class="card-body">-->
                    <!--List Of your Repos:-->

                    <!--</div>-->
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
                url: '/repos/julius75/oneLove/contents'
            }
        },
        mounted:function () {
            this.GitHubAPI.get('/repos/julius75/oneLove/contents', {}, (response)=>{
                 this.myGitHubData=response.body
                console.log(response.body)
            })

        },
        computed:{
            openDir:function () {

            }
        }

    }
</script>
