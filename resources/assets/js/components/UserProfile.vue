<template>
    <div class="user-profile">
        <div class="alert alert-danger" v-if="profileForm.errors.length>0">
            <p class="mb-0">
                Something went wrong!
            </p>
            <ul>
                <li v-for="error in profileForm.errors">
                    {{ error }}
                </li>
            </ul>
        </div>

        <div class="alert alert-success" v-if="profileForm.message">
            <p class="mb-0">{{ profileForm.message }}</p>
        </div>
        <form>
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" v-on:focus="clearMessage" class="form-control" id="username" v-model="profileForm.username">
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input type="text" v-on:focus="clearMessage" class="form-control" id="email" v-model="profileForm.email" disabled>
            </div>

            <div class="form-group">
                <label for="website">website</label>
                <input type="text" v-on:focus="clearMessage" class="form-control" id="website" v-model="profileForm.website">
            </div>

            <div class="form-group">
                <label for="bio">bio</label>
                <textarea v-on:focus="clearMessage" class="form-control" id="bio" v-model="profileForm.bio"></textarea>
            </div>

            <button @click.prevent="update" class="btn btn-primary">update</button>
        </form>
    </div>
</template>
<script>
  export default {

    data() {
      return {
        profileForm: {
          username: '',
          email: '',
          website: '',
          bio: '',
          errors: [],
          message: '',
        }
      };
    },
    mounted() {
      this.getProfile();
    },
    methods: {
      getProfile() {
        axios.get('/api/user/profile')
          .then(response => {
            this.profileForm = response.data;
          })
      },
      update() {
        axios.put('/api/user/profile/update', this.profileForm)
          .then(response => {
            this.profileForm.errors = [];
            this.profileForm.message = response.data.message;
            console.log(response);
          }).catch(error => {
          this.profileForm.errors = _.flatten(_.toArray(error.response.data.errors));
        })
      },
      clearMessage() {
        this.profileForm.message = '';
        this.profileForm.errors = [];
      }
    },

  }
</script>

<style lang="scss" scoped>

</style>
