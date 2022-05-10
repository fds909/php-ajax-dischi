var app = new Vue ({
  el: "#app",
  data: {
    albums: []
  },
  created() {
    axios.get('http://localhost/php-ajax-dischi/api/dischi.php')
        .then((res) => {
          console.log(res.data);
          this.albums = res.data;
        })
  }
})