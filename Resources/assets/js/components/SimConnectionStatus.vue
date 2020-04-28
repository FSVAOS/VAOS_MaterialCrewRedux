<template>
    <div>
        <div class="panel-item" style="display: inline-flex; width: 100%; background: #323232">
            <div :class="flightRules" style="border-radius: 50%; height: 25px; width: 25px; margin: auto; border: 2px solid white;">
            </div>
            <div style="margin-left: 1rem; flex: 1">
                <div style="font-size: 24px; line-height: 1">{{ wx.type }} {{ wx.start_time.repr }}</div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "SimConnectionStatus"
    }
</script>

<style scoped>
    .green {
        background: rgba(39, 193, 84, 1);
    }
    .yellow {
        background: #ded308;
    }
    .red {
        background: #da1319;
    }
</style>
