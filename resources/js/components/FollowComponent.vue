<template>
    <a @click = "followUser" class="btn-primary" v-text="buttonTxt"></a>
</template>

    <script>
        export default {
            props:['userId','follows'],
            methods:{
                followUser(){
                   axios.post('/follow/' + this.userId)
                   .then(response => {
                       this.status = !this.status;
                       console.log(response.data);
                   })
                   .catch(errors=>{
                       if(errors.response.status==401){
                           window.location ='/login';
                       }
                   });
                }
            },
            data: function(){
                return{
                    status:this.follows,
                }
            },
            computed:{
                buttonTxt(){
                    return(this.status)?'Unfollow':'Follow';
                }
            },
            mounted() {
                console.log("Component mounted.");
            },
        };
    </script>
</template>
