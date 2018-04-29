<template>
    <div class="image-upload-crop">
        <a href="javascript:" class="image-upload-crop__file" ref="fileWrap">
            <span class="image-upload-crop__add-button">+</span>
            <input type="file" v-on:change="handleChange" ref="inputFile">
        </a>
        <div class="image-upload-crop__crop-area" ref="cropArea"></div>
        <div>
            <a href="javascript:" v-on:click="handleSubmit" class="image-upload-crop__submit-button">submit</a>
        </div>

    </div>
</template>

<script>

  import Cropper from 'cropperjs';
  import 'cropperjs/dist/cropper.css';

  export default {

    data() {
      return {
        allowedMimeTypes: ['image/jpeg', 'image/png'],
        cropDetails: null,
        cropperInstance: null,
      }
    },

    mounted() {
      //this.cropper = new Cropper(document.querySelector(''))
    },

    destroyed(){
      this.cropperInstance.destroy();
      this.$refs.cropArea.innerHTML='';
    },

    methods: {

      handleChange(e) {

        if (this.allowedMimeTypes.indexOf(this.$refs.inputFile.files[0].type) === -1) {
          // throw new Error('Not supported file types');
          alert('Not supported file types');
          return;
        }

        let cropper = null;

        let fileReader = new FileReader();

        fileReader.onload = (e) => {
          let cropArea = this.$refs.cropArea;
          cropArea.innerHTML = '';
          let img = document.createElement('img');
          img.src = e.target.result;
          cropArea.appendChild(img);
          cropper = new Cropper(img, {
            aspectRatio: 1 / 1,
            preview: '.image-upload-crop__preview',
            crop: (e) => {
              this.cropDetails = e.detail;
              this.cropperInstance = cropper;
            }
          });
        };
        fileReader.readAsDataURL(this.$refs.inputFile.files[0]);
      },
      handleSubmit(e) {
        let that = this;
        e.preventDefault();
        if (!this.cropDetails) {
          alert('no file is selected!');
          return;
        }
        let canvas = this.cropperInstance.getCroppedCanvas({
          width: 200,
          height: 200,
          minWidth: 100,
          minHeight: 100,
          maxWidth: 200,
          maxHeight: 200,
          fillColor: '#fff',
          imageSmoothingEnabled: false,
          imageSmoothingQuality: 'high'
        });

        // upload to server with dataURL
        let dataURL = canvas.toDataURL();


        // or upload to server with formData
        canvas.toBlob(function (blob) {
          let formData = new FormData();
          formData.append('croppedImage', blob);

          axios.post('/test-upload', formData).then((response) => {
            let fileWrap = that.$refs.fileWrap;
            fileWrap.style.backgroundImage = `url(${response.data.url})`;
            console.log(response)
          })
            .catch(error => console.error(error));
        });


        // destory
        //this.cropperInstance.destroy();
        this.$refs.cropArea.innerHTML='';
      }
    }
  };
</script>

<style scoped lang="scss">
    .image-upload-crop {
        img {
            max-width: 100%;
        }

        display: flex;
        flex-direction: column;

        .image-upload-crop__crop-area {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .image-upload-crop__file {
            border: 1px solid #f7f8fa;
            background-color: #fff;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 2rem;
            overflow: hidden;
            text-decoration: none;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100px;
            height: 100px;
            cursor: pointer;
            .image-upload-crop__add-button{
                font-size: 3rem;
            }

            > input {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                opacity: 0;
            }
        }

        .image-upload-crop__submit-button {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid #ccc;
            padding: 0.375rem 0.75rem;
            font-size: 0.9rem;
            line-height: 1.6;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            color: #212529;
            background-color: #f8f9fa;
            //border-color: #f8f9fa;
            text-decoration: none;
            &:hover, &:focus {
                background-color: darken(#f8f9fa, 5%);
            }
        }
    }
</style>