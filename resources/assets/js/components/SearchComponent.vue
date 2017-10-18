<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Search</div>

                    <div class="panel-body">
                        <form action="#" @submit.prevent="search()">
                            <div class="form-group">
                                <label for="name">Search</label>
                                <input v-model="search.name" type="text" name="name" class="form-control" autofocus>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['gtm_id', 'gtm_cid', 'api_token'],
        mounted() {
            console.log('Component mounted.')
            this.$http.post('www.google-analytics.com/collect/?v=1&t=event&tid=' + this.gtm_id + '&cid='+ this.gtm_cid +'&event_label=Search Module&event_category=Search&event_action=Loaded');
        },
        methods: {
            search() {
                axios.get('/api/search/', {
                    params: {
                        query: this.search.name,
                        api_token: this.api_token
                    }
                }).then(response => {
                    this.category_results = response.data;
                    this.$http.post('www.google-analytics.com/collect/?v=1&t=event&tid=' + this.gtm_id + '&cid='+ this.gtm_cid +'&event_label=Search Module&event_category=Search&event_action=Submit');
                });
            }
        }
    }
</script>
