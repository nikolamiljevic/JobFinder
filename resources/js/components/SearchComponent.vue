<template>
    <div>
        <input type="text" 
                v-model="keyword" 
                placeholder="Search jobs"
                v-on:keyup="searchJobs()"
                 class="form-control"
        >
        <div class="card-footer">
            <ul class="list-group" v-if="results.length">
                <li class="list-group-item" v-for="result in results">
                    <a style="color:#000" :href=" '/jobs/'+result.id +'/'+result.slug+'/' ">{{result.title}}</a>
                <br>
                <small class="badge badge-success">{{result.position}}</small>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                keyword:'',
                results:[]
            }
        },
        methods:{
            searchJobs(){
                this.results = [];
                if(this.keyword.length > 1){
                    axios.get('/jobs/search',{params:{keyword:this.keyword}})
                    .then(response => {
                        this.results = response.data;
                    });
                }
            }
        }
    }
</script>
