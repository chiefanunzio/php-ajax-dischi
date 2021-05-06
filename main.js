function init() {


    new Vue({

        el: '#app',
        data: {
            'albums':[]
        },
        mounted() {
            axios.get('data.php')
                .then(r => {

                    let datas = r.data;
                    this.albums = datas;
                    console.log(this.albums);

                })
                .catch(c => {

                    console.log('error');
                })
        }


    })

}

document.addEventListener("DOMContentLoaded",init);