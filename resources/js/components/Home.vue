<template>
    <div class="container">
      <div class="media simple-post" v-for="post in posts" :key="post.id">
          <img class="mr-3"  :src="'assets/img/'+post.image" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="mt-0">
                <a href="#">{{post.title}}</a>
            </h4>
             {{post.body.substr(0,150)}}
            <ul class="list-inline list-unstyled d-flex post-info">
                  <li><span><i class="fa fa-user"></i> posted by : <strong class="text-primary">{{post.user.name}}</strong> </span></li>
                  <li>|</li>
                  <li><span><i class="fa fa-calendar"></i>{{post.added_at}}</span></li>
                  <li>|</li>
                  <span><i class="fa fa-comment"></i> {{post.comments_count}}  comments</span>

            </ul>
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
