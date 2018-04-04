const SILENT = 0x00;
const ERROR = 0x01;
const WARN = 0x02;
const INFO = 0x03;
const DEBUG = 0x04;

export function createLogger(name, level = WARN) {
    function prefix(args) {
        if (typeof args[0] === "string") args[0] = "[" + name + "] " + args[0];
        else args.unshift("[" + name + "]");

        return args;
    }

    return {
        SILENT,
        ERROR,
        WARN,
        INFO,
        DEBUG,

        level: level,

        debug: function(...args) {
            if (this.level >= DEBUG) console.log(...prefix(args));
            return true;
        },

        info: function(...args) {
            if (this.level >= INFO) console.log(...prefix(args));
            return true;
        },

        warn: function(...args) {
            if (this.level >= WARN) console.warn(...prefix(args));
            return true;
        },

        error: function(...args) {
            if (this.level >= ERROR) console.error(...prefix(args));
            return false;
        },

        setLevel: function(level) {
            this.level = level;
        }
    };
}
