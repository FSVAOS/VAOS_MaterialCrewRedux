export default class {
    constructor(url) {
        this.url = url;
        this.connected = false;
    }
    connect() {
        this.wsc = new WebSocket(`ws://${this.url}/control`);
        this.wst = new WebSocket(`ws://${this.url}/telemetry`);

        this.wsc.onopen = () => {
            this.connected = true;
            console.log('Ignite Connected')
        }
    }
    sendControlMessage(type, data) {
        this.wsc.send(`${type}|${data}`);
    }
}
