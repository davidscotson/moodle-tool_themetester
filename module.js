
M.tool_themetester = M.tool_themetester || {};

M.tool_themetester.prettyprint = function(Y) {
    Y.on("domready", function (e) {
        prettyPrint();
    });
};
