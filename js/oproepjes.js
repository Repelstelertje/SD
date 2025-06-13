var oproepjes= new Vue({
    el: "#oproepjes",
    created: function(){
        this.init();
    },
    data: {
        profiles: [],
        page: 1,
        ppp: 20,    //profiles per page
    },
    computed: {
        filtered_profiles: function(){
            //afhankelijk van pagina nummer, een deel vd profielen tonen
            //alleen hier tellen we vanaf 0
            var i0= (this.page - 1) * this.ppp;
            var i1= i0 + this.ppp;
            return this.profiles.slice(i0, i1);
        },
        max_page_number: function(){
            return Math.ceil(this.profiles.length / this.ppp);  
        },
        profile: function(){
        	return this.profiles[0];
        }
    },
    methods:  {
        init: function(){
            if (typeof api_url === 'undefined') {
                // Skip API call when no endpoint is defined on the page
                return;
            }
            axios.get(api_url)
                .then(function(response){
                    if(response.data && Array.isArray(response.data.profiles)){
                        oproepjes.profiles = response.data.profiles.map(function(p){
                            if(p.src && p.src.indexOf('no_img_Vrouw.jpg') !== -1){
                                p.src = 'img/fallback.svg';
                            }
                            return p;
                        });
                    } else {
                        console.error('Invalid profile data', response.data);
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        set_page_number: function(page){
            if(page <= 1){
                this.page= 1;
            } else if(page >= this.max_page_number){
                this.page= this.max_page_number;
            } else {
                this.page= page;
            }
            
            
        },
        imgError: function(event){
            event.target.src = 'img/fallback.svg';
        }
    }
});
