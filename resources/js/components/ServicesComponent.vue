<template>
    <div>
        {{ service.name }}
    </div>
</template>

<script>
module.exports = {
    data: function() {
        return {
            info: null
        };
    },
    mounted: function() {
        axios.get("api/services").then(response => (this.info = response));
    }
};
</script>
