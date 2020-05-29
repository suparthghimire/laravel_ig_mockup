<template>
<div>
    <div class="post-action flex-column">
            <div class="post-action-left">
                <ul class="action-list">
                    <li class="action-item">
                        <i
                                id="like"
                                class="far fa-heart"
                                @click="like"
                                v-if="userlike == 0"
                            ></i>
                            <i
                                v-else
                                id="like"
                                class="fas fa-heart red"
                                @click="like"
                            ></i>
                    </li>
                    <li class="action-item">
                        <span class="action-link">
                            <i class="far fa-comment"  @click="commentLocation"></i>
                        </span>
                    </li>
                    <li class="action-item">
                        <span href="#" class="action-link"><i class="fas fa-paper-plane"></i></span>
                    </li>
                </ul>
            </div>
            <p class="post-likes"> {{likeCount}} Likes</p>
        </div>
</div>
</template>

    <script>
        export default {
            props:["postid","postlikes"],
            data(){
                return{
                "likeCount":0,
                "userlike":0,
                }
            },
            created(){
                this.likeCount = this.postlikes.length;
                axios
                .get("/checklike/" + this.postid)
                .then(response => {
                    console.log(response.data);
                    if (response.data == "likes") {
                        this.userlike = 1;
                    } else {
                        this.userlike = 0;
                    }
                })
                .catch(errors => {
                    console.log(errors);
                });

            },
            methods:{
                checkLike() {
                    axios
                        .get("/checklike/" + this.postid)
                        .then(response => {
                            console.log(response.data);
                            if (response.data == "likes") {
                                this.userlike = 1;
                            } else {
                                this.userlike = 0;
                            }
                        })
                        .catch(errors => {
                            console.log(errors);
                        });
                },
                like() {
                    axios
                        .post("/like/" + this.postid)
                        .then(response => {
                            // console.log(response.data);
                            if (response.data == "unliked") {
                                this.likeCount -= 1;
                            } else {
                                this.likeCount += 1;
                            }
                            // console.log(response);
                        })
                        .catch(errors => {
                            console.log(errors);
                        });
                    this.checkLike();
                },
                commentLocation() {
                location.href = "/comments/" + this.postid;
            }
            },
            mounted: function() {
                console.log("Component mounted.");
            },

        };
    </script>
</template>
