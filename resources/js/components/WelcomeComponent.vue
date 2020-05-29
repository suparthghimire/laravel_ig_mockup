<template>
    <div>
        <div class="post-wrapper">
            <div class="post-header">
                <div class="profile-info">
                    <div class="story-img profile-img">
                        <img v-if="userimage" :src="profileimg" />
                        <img
                            v-else
                            src="assets/img/default/default.jpg"
                            alt="Profile Image"
                        />
                    </div>
                    <span class="profile-name post-profile-name">
                        <span class="text-white" @click="userLocation">
                            {{ username }}
                        </span>
                    </span>
                </div>
            </div>
            <div class="post-img">
                <img :src="postImg" />
            </div>
            <div id="action">
                <action-component
                    :postid="this.postid"
                    :postlikes="this.postlikes"
                ></action-component>
            </div>
            <!-- <div class="post-action">
                <div class="post-action-left">
                    <ul class="action-list">
                        <li class="action-item" id="likeBtn">
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
                            <a href="comments.show" class="action-link"
                                ><i class="far fa-comment"></i
                            ></a>
                        </li>
                        <li class="action-item">
                            <a href="#" class="action-link"
                                ><i class="fas fa-paper-plane"></i
                            ></a>
                        </li>
                    </ul>
                </div>
            </div> -->
            <!-- <p class="post-likes">
                {{ likeCount }}
                Likes
            </p> -->
            <p class="caption" v-if="postcaption">
                <span class="text-white profile-name">
                    {{ username }}
                </span>
                <span class="caption-txt">
                    {{ postcaption }}
                </span>
            </p>
            <div class="post-comment mb-20 ">
                <div class="post-highlighted-comment" @click="commentLocation">
                    <span
                        class="text-white text-sm"
                        v-if="postcomments.length == 0"
                        >This post Has No Comments. Add One?</span
                    >
                    <span class="text-white text-sm mtb-10" v-else
                        >View all {{ postcomments.length }} Comments and Add one
                        Here</span
                    >
                </div>
                <!-- userlikes post_id {{ userlikes.fore }} -->

                <br />
                <!-- posttlikes post_id {{ postlikes }} -->
            </div>
        </div>
    </div>
</template>

<script>
import { ActionComponent } from "./ActionComponent";

export default {
    props: [
        "postid",
        "userid",
        "username",
        "postimage",
        "userimage",
        "postcaption",
        "postcomments",
        "postlikes"
    ],
    data() {
        return {
            postImg: "/storage/uploads/posts/" + this.postimage,
            profileimg: "/storage/uploads/profile/" + this.userimage,
            likeCount: 0,
            userlike: 0
        };
    },
    created() {
        this.likeCount = this.postlikes.length;
    },
    methods: {
        userLocation() {
            location.href = "/profile/" + this.userid;
        },
        commentLocation() {
            location.href = "/comments/" + this.postid;
        }
    }
};
</script>
