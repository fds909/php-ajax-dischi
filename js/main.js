var app = new Vue ({
  el: "#app",
  data: {
    albums: []
  },
  created() {
    axios.get('https://flynn.boolean.careers/exercises/api/array/music')
        .then((res) => {
          console.log(res.data.response);
          this.albums = res.data.response;
        })
  }
})