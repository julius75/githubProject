<template>
    <div >

    <table style="width:100%">
        <tr>
            <th>Name</th>
            <th>Message</th>
        </tr>
        <tr v-for="commit in commits">
            <td>{{commit.commit.author.name}}</td>
            <td>{{commit.commit.message}}</td>

        </tr>
    </table>
            </div>

</template>
<script>
    export default {

        data(){
            return{
                commits: []
            }
        },
        props: ['user','repo']
        ,
        mounted:function () {
            this.GitHubAPI.get('/repos/'+this.user+'/'+this.repo+'/commits',{}, (response) => {
                this.commits=response.body
            })
        }
    }
</script>