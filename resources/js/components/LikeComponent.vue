<template>
<div>
    <a @click = "likePost" class="action-link">
         <i class="far fa-heart"></i>
    </a>
</div>
</template>

    <script>
        export default {
            props:['postId'],
            methods:{
                likePost(){
                    axios.post('/like/'+this.postId).then(response=>{
                        console.log(response.data)
                    });
                    console.log(this.postId);

                }
            },
            mounted: function() {
                console.log("Component mounted.");
            },
        };
    </script>
</template>
