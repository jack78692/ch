const { addonBuilder } = require("stremio-addon-sdk");

const manifest = {
    id: "stremio-iptv-addon",
    version: "1.0.0",
    name: "ILVTV Stremio Addon",
    description: "Watch ILVTV live on Stremio!",
    resources: ["stream"],
    types: ["tv"],
    idPrefixes: ["ilvtv"],
    catalogs: []
};

const IPTV_STREAM = "https://satstorm.com/tv/ILVTV.m3u8";

const builder = new addonBuilder(manifest);

builder.defineStreamHandler(({ type, id }) => {
    if (type === "tv" && id.startsWith("ilvtv")) {
        return Promise.resolve({
            streams: [{
                title: "ILVTV Live Stream",
                url: IPTV_STREAM,
                isFree: true
            }]
        });
    }
    return Promise.resolve({ streams: [] });
});

module.exports = builder.getInterface();
