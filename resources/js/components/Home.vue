<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        home
                        {{posts}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
          return{
              posts:{}
          }
        },
        methods: {
          getPosts() {
            axios.get('/api/posts')
              .then(res => {
                  console.log(res.data.data);
                  this.posts = res.data.data;
                  localStorage.setItem('posts',JSON.stringify(this.posts));
              })
              .then(err => console.log(err))
          }
        },
        mounted() {
            this.getPosts();
            // console.log('Component mounted.');
        },

    }
</script>
