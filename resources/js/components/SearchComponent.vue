<template>
    <div>
        <header class="search p-20 ">
            <div class="d-flex justify-content-bt">
                <button type="submit" class="text-white search-btn">
                    <i class="fas fa-search"></i>
                </button>
                <input
                    type="text"
                    class="search-box text-white"
                    placeholder="Search Users"
                    name="query"
                    id="search-box"
                    v-model="keywords"
                    @keyup="fetch"
                />
                <button type="reset" class="reset text-white">
                    <i class="fas fa-times text-md"></i>
                </button>
            </div>
        </header>

        <main class="notifications">
            <div class="notification-container">
                <div class="notification-wrapper">
                    <ul class="notification-list" v-if="results.length > 0">
                        <li
                            class="notification-item w-45"
                            v-for="result in results"
                            :key="result.id"
                        >
                            <span
                                class="notification-link"
                                @click="linkUser(result)"
                            >
                                <div class="profile-img">
                                    <img
                                        :src="imgName(result)"
                                        alt="Profile Image"
                                    />
                                </div>
                                <div class="notification-info">
                                    <span class="profile-name">
                                        {{ result.name }}
                                    </span>
                                </div>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
export default {
    data() {
        return {
            keywords: "",
            results: []
        };
    },
    methods: {
        fetch() {
            axios
                .get("/searchuser/" + this.keywords)
                .then(response => {
                    this.results = response.data;
                    console.log(this.results);
                })
                .catch(errors => {
                    console.log(errors);
                });
        },
        linkUser(result) {
            location.href = "/profile/" + result.id;
        },
        imgName(result) {
            return "storage/uploads/profile/" + result.profile.image;
        }
    }
};
</script>
