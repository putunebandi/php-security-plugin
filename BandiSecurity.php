<?php

// Simple PHP Security Plugin
// Coded by Rizki Wahyu Pratama
// Thanks to Afrizal F.A, incrustwerush.org, @dwisiswant0, noobsec.org

if (!class_exists('Security')) {
    class Security
    {
        public static function block()
        {
            http_response_code(403);
            echo "<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap'><style>body{text-align:center;padding:50px;background-color:#1e1e1e;color:#fff;font-family:'Roboto Condensed'}h1{color:red;font-size:2.5em}p{font-size:1.2em;margin-top:20px}img{width:10%;margin-top:30px}</style></head><body><img src='data:image/svg+xml;base64,PHN2ZyB4bWxuczppbmtzY2FwZT0iaHR0cDovL3d3dy5pbmtzY2FwZS5vcmcvbmFtZXNwYWNlcy9pbmtzY2FwZSIgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHNvZGlwb2RpOmRvY25hbWU9InN0b3Auc3ZnIiB2aWV3Qm94PSIwIDAgMzAwIDMwMCIgdmVyc2lvbj0iMS4xIiB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIGlua3NjYXBlOnZlcnNpb249IjAuOTEgcjEzNzI1IiB4bWxuczpzb2RpcG9kaT0iaHR0cDovL3NvZGlwb2RpLnNvdXJjZWZvcmdlLm5ldC9EVEQvc29kaXBvZGktMC5kdGQiPg0KIDxzb2RpcG9kaTpuYW1lZHZpZXcgZml0LW1hcmdpbi1sZWZ0PSIwIiBpbmtzY2FwZTp6b29tPSIyLjQ4MTQ0NTQiIGJvcmRlcm9wYWNpdHk9IjEiIGlua3NjYXBlOmN1cnJlbnQtbGF5ZXI9InN2ZzIiIGlua3NjYXBlOmN4PSIxODYuMDYyOTciIGlua3NjYXBlOmN5PSIxNjAuNDg5MjkiIGlua3NjYXBlOndpbmRvdy1tYXhpbWl6ZWQ9IjEiIHNob3dncmlkPSJmYWxzZSIgZml0LW1hcmdpbi1yaWdodD0iMCIgYm9yZGVyY29sb3I9IiM2NjY2NjYiIGlua3NjYXBlOndpbmRvdy14PSIwIiBndWlkZXRvbGVyYW5jZT0iMTAiIG9iamVjdHRvbGVyYW5jZT0iMTAiIGlua3NjYXBlOndpbmRvdy15PSIyNCIgZml0LW1hcmdpbi1ib3R0b209IjAiIGlua3NjYXBlOndpbmRvdy13aWR0aD0iMTkyMCIgaW5rc2NhcGU6cGFnZW9wYWNpdHk9IjAiIGlua3NjYXBlOnBhZ2VzaGFkb3c9IjIiIHBhZ2Vjb2xvcj0iI2ZmZmZmZiIgZ3JpZHRvbGVyYW5jZT0iMTAiIGlua3NjYXBlOndpbmRvdy1oZWlnaHQ9IjEwNTYiIGZpdC1tYXJnaW4tdG9wPSIwIi8+DQogPGcgZmlsbC1ydWxlPSJldmVub2RkIj4NCiAgPHBhdGggZD0ibTIxMS4yIDI5Ny4yLTEyMi4xLTAuMS04Ni4zNC04Ni40IDAuMDYxLTEyMiA4Ni4zOC04Ni4zNSAxMjIuMSAwLjA1OCA4Ni4zIDg2LjM3LTAuMSAxMjIuMXoiIGlua3NjYXBlOnRyYW5zZm9ybS1jZW50ZXIteD0iLTYuMzU2OTU1MSIgaW5rc2NhcGU6dHJhbnNmb3JtLWNlbnRlci15PSItOS42MjQwMTA0IiBpbmtzY2FwZTpjb25uZWN0b3ItY3VydmF0dXJlPSIwIiBzdHJva2U9IiNjMDAiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLXdpZHRoPSI1LjE3MSIgc29kaXBvZGk6bm9kZXR5cGVzPSJjY2NjY2NjY2MiIGZpbGw9IiNmZmYiLz4NCiAgPHBhdGggZD0ibTIwMy45IDI3OS44LTEwNy43LTAuMDQ5Ni03Ni4xLTc2LjE3IDAuMDQ5NjEtMTA3LjcgNzYuMTctNzYuMSAxMDcuNyAwLjA0OTU5IDc2LjEgNzYuMTctMC4wNDk2IDEwNy43eiIgaW5rc2NhcGU6dHJhbnNmb3JtLWNlbnRlci14PSItNS42MDYwMDg0IiBpbmtzY2FwZTp0cmFuc2Zvcm0tY2VudGVyLXk9Ii04LjQ4NzEzODYiIGlua3NjYXBlOmNvbm5lY3Rvci1jdXJ2YXR1cmU9IjAiIHNvZGlwb2RpOm5vZGV0eXBlcz0iY2NjY2NjY2NjIiBmaWxsPSIjYzAwIi8+DQogPC9nPg0KIDxnIGZpbGwtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI2ZmZiIgdHJhbnNmb3JtPSJtYXRyaXgoLjU2MDUgMCAwIC41NjA1IC0yLjMwNiAxLjI2NikiPg0KICA8cGF0aCBkPSJtMjc2LjQgMjQ1LjFjNTIuMjUgMCA4Mi42MSA2NC4zNCA4Mi42MSAxMTYuNiAwIDUyLjI1LTUyLjM2IDgwLjYxLTEwNC42IDgwLjYxLTUyLjI1IDAtOTIuNjEtNDIuMzYtOTIuNjEtOTQuNjFzNDIuMzYtMTAyLjYgOTQuNjEtMTAyLjYiIHNvZGlwb2RpOm5vZGV0eXBlcz0iY3Nzc2MiIGlua3NjYXBlOmNvbm5lY3Rvci1jdXJ2YXR1cmU9IjAiLz4NCiAgPGcgc3Ryb2tlPSIjZmZmIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS13aWR0aD0iNDgiPg0KICAgPHBhdGggZD0ibTE4NS44IDE1OHYxOTAiIHNvZGlwb2RpOm5vZGV0eXBlcz0iY2MiIGlua3NjYXBlOmNvbm5lY3Rvci1jdXJ2YXR1cmU9IjAiLz4NCiAgIDxwYXRoIGQ9Im0yMzYuMyAxMjQuMXYxOTAiIHNvZGlwb2RpOm5vZGV0eXBlcz0iY2MiIGlua3NjYXBlOmNvbm5lY3Rvci1jdXJ2YXR1cmU9IjAiLz4NCiAgIDxwYXRoIGQ9Im0yODYuOSA5OC4ydjE5MCIgc29kaXBvZGk6bm9kZXR5cGVzPSJjYyIgaW5rc2NhcGU6Y29ubmVjdG9yLWN1cnZhdHVyZT0iMCIvPg0KICAgPHBhdGggZD0ibTMzNy40IDEyOS41djE5MCIgc29kaXBvZGk6bm9kZXR5cGVzPSJjYyIgaW5rc2NhcGU6Y29ubmVjdG9yLWN1cnZhdHVyZT0iMCIvPg0KICAgPHBhdGggZD0ibTQyMi45IDI2OS4zLTg4LjY3IDEwNy45LTkuMDM3IDExIiBzb2RpcG9kaTpub2RldHlwZXM9ImNjYyIgaW5rc2NhcGU6Y29ubmVjdG9yLWN1cnZhdHVyZT0iMCIvPg0KICA8L2c+DQogPC9nPg0KPC9zdmc+'><h1>ACCESS DENIED</h1><p>The requested URL was rejected, Powered by <a style="text-decoration: none; color: white;" href="https://github.com/putunebandi/php-security-plugin">BandiSecurity</a>.</p></body></html>";
            exit();
        }

        public static function setHeaders()
        {
            header("X-Frame-Options: SAMEORIGIN");
            header("X-XSS-Protection: 1; mode=block");
        }

        public static function parametersFilter($params)
        {
            $wafRules = [
                "(?:--[^\\n]*$)|(?:\\<!-|-->)|(?:[^*]\\/\\*|\\*\\/[^*])|(?:(?:[\\W\\d]#|--|{)$)|(?:\\/{3,}.*$)|(?:<!\\[\\W)|(?:\\]!>)",
                "(?:in\\s*\\(+\\s*select)|(?:(?:n?and|x?or|not |\\|\\||\\&\\&)\\s+[\\s\\w+]+(?:regexp\\s*\\(|sounds\\s+like\\s*\"|[=\\d]+x))|(\"\\s*\\d\\s*(?:--|#))|(?:\"[%&<>^=]+\\d\\s*(=|or))|(?:\"\\W+[\\w+-]+\\s*=\\s*\\d\\W+\")|(?:\"\\s*is\\s*\\d.+\"?\\w)|(?:\"\\|?[\\w-]{3,}[^\\w\\s.,]+\")|(?:\"\\s*is\\s*[\\d.]+\\s*\\W.*\")",
                "(?:\"\s+and\s*=\W)|(?:\(\s*select\s*\w+\s*\()|(?:\*\/from)|(?:\+\s*\d+\s*\+\s*@)|(?:\w\"\s*(?:[-+=|@]+\s*)+[\d(])|(?:coalesce\s*\(|@@\w+\s*[^\w\s])|(?:\W!+\"\w)|(?:\";\s*(?:if|while|begin))|(?:\"[\s\d]+=\s*\d)|(?:order\s+by\s+if\w*\s*\()|(?:[\s(]+case\d*\W.+[tw]hen[\s(])",
                "([^*:\s\w,.\/?+-]\s*)?(?<![a-z]\s)(?<![a-z\/_@])(\s*return\s*)?(?:hash|name|href|navigateandfind|source|pathname|close|constructor|port|protocol|assign|replace|back|forward|document|ownerdocument|window|top|this|self|parent|frames|_?content|date|cookie|innerhtml|innertext|csstext+?|outerhtml|print|moveby|resizeto|createstylesheet|stylesheets)(?(1)[^\w%\"]|(?:\s*[^@\/\s\w%.+\-]))",
                "(?:[^\w\s=]on(?!g\&gt;)\w+[^=_+-]*=[^$]+(?:\W|\&gt;)?)",
                "(?:\\)\\s*\\[)|([^*\":\\s\\w,.\\/?+-]\\s*)?(?<![a-z]\\s)(?<![a-z_@\\|])(\\s*return\\s*)?(?:globalstorage|sessionstorage|postmessage|callee|constructor|content|domain|prototype|try|catch|top|call|apply|url|function|object|array|string|math|if|for\\s*(?:each)?|elseif|case|switch|regex|boolean|location|(?:ms)?setimmediate|settimeout|setinterval|void|setexpression|namespace|while)(?(1)[^\\w%\"]|(?:\\s*[^@\\s\\w%\".+\\-\\/]))",
                "(?:\.\s*\w+\W*=)|(?:\W\s*(?:location|document)\s*\W[^({[;]+[({[;])|(?:\(\w+\?[:\w]+\))|(?:\w{2,}\s*=\s*\d+[^&\w]\w+)|(?:\]\s*\(\s*\w+)",
                "(?:=\\s*(?:top|this|window|content|self|frames|_content))|(?:\\/\\s*[gimx]*\\s*[)}])|(?:[^\\s]\\s*=\\s*script)|(?:\\.\\s*constructor)|(?:default\\s+xml\\s+namespace\\s*=)|(?:\\/\\s*\\+[^+]+\\s*\\+\\s*\\/)",
                "(?:\d\"\s+\"\s+\d)|(?:^admin\s*\"|(\/\*)+\"+\s?(?:--|#|\/\*|{)?)|(?:\"\s*or[\w\s-]+\s*[+<>=(),-]\s*[\d\"])|(?:\"\s*[^\w\s]?=\s*\")|(?:\"\W*[+=]+\W*\")|(?:\"\s*[!=|][\d\s!=+-]+.*[\"(].*$)|(?:\"\s*[!=|][\d\s!=]+.*\d+$)|(?:\"\s*like\W+[\w\"(])|(?:\sis\s*0\W)|(?:where\s[\s\w\.,-]+\s=)|(?:\"[<>~]+\")",
                "(?:\"\\s+and\\s*=\\W)|(?:\\(\\s*select\\s*\\w+\\s*\\()|(?:\\*\\/from)|(?:\\+\\s*\\d+\\s*\\+\\s*@)|(?:\\w\"\\s*(?:[-+=|@]+\\s*)+[\\d(])|(?:coalesce\\s*\\(|@@\\w+\\s*[^\\w\\s])|(?:\\W!+\"\\w)|(?:\";\\s*(?:if|while|begin))|(?:\"[\\s\\d]+=\\s*\\d)|(?:order\\s+by\\s+if\\w*\\s*\\()|(?:[\\s(]+case\\d*\\W.+[tw]hen[\\s(])",
                "(?:\\W\\s*hash\\s*[^\\w\\s-])|(?:\\w+=\\W*[^,]*,[^\\s(]\\s*\\()|(?:\\?\"[^\\s\"]\":)|(?:(?<!\\/)__[a-z]+__)|(?:(?:^|[\\s)\\]\\}])(?:s|g)etter\\s*=)",
                "(?:#@~\\^\\w+)|(?:\\w+script:|@import[^\\w]|;base64|base64,)|(?:\\w\\s*\\([\\w\\s]+,[\\w\\s]+,[\\w\\s]+,[\\w\\s]+,[\\w\\s]+,[\\w\\s]+\\))",
                "(?:,.*[)\\da-f\"]\"(?:\".*\"|\\Z|[^\"]+))|(?:\\Wselect.+\\W*from)|((?:select|create|rename|truncate|load|alter|delete|update|insert|desc)\\s*\\(\\s*space\\s*\\()",
                "(?:[\w.-]+@[\w.-]+%(?:[01][\db-ce-f])+\w+:)",
                "(?:union\\s*(?:all|distinct|[(!@]*)\\s*[([]*\\s*select)|(?:\\w+\\s+like\\s+\\\")|(?:like\\s*\"\\%)|(?:\"\\s*like\\W*[\"\\d])|(?:\"\\s*(?:n?and|x?or|not |\\|\\||\\&\\&)\\s+[\\s\\w]+=\\s*\\w+\\s*having)|(?:\"\\s*\\*\\s*\\w+\\W+\")|(?:\"\\s*[^?\\w\\s=.,;)(]+\\s*[(@\"]*\\s*\\w+\\W+\\w)|(?:select\\s*[\\[\\]()\\s\\w\\.,\"-]+from)|(?:find_in_set\\s*\\()",
                "(?:\({2,}\+{2,}:{2,})|(?:\({2,}\+{2,}:+)|(?:\({3,}\++:{2,})|(?:\$\[!!!\])",
                "(?:[+\\/]\\s*name[\\W\\d]*[)+])|(?:;\\W*url\\s*=)|(?:[^\\w\\s\\/?:>]\\s*(?:location|referrer|name)\\s*[^\\/\\w\\s-])",
                "(?:[^:\s\w]+\s*[^\w\/](href|protocol|host|hostname|pathname|hash|port|cookie)[^\w])",
                "(?:merge.*using\\s*\\()|(execute\\s*immediate\\s*\")|(?:\\W+\\d*\\s*having\\s*[^\\s\\-])|(?:match\\s*[\\w(),+-]+\\s*against\\s*\\()",
                "(?:[\".]script\\s*\\()|(?:\\$\\$?\\s*\\(\\s*[\\w\"])|(?:\\/[\\w\\s]+\\/\\.)|(?:=\\s*\\/\\w+\\/\\s*\\.)|(?:(?:this|window|top|parent|frames|self|content)\\[\\s*[(,\"]*\\s*[\\w\\$])|(?:,\\s*new\\s+\\w+\\s*[,;)])",
                "(?:with\\s*\\(\\s*.+\\s*\\)\\s*\\w+\\s*\\()|(?:(?:do|while|for)\\s*\\([^)]*\\)\\s*\\{)|(?:\\/[\\w\\s]*\\[\\W*\\w)",
                "(?:create\s+function\s+\w+\s+returns)|(?:;\s*(?:select|create|rename|truncate|load|alter|delete|update|insert|desc)\s*[\[(]?\w{2,})",
                "(?:select\s*pg_sleep)|(?:waitfor\s*delay\s?\"+\s?\d)|(?:;\s*shutdown\s*(?:;|--|#|\/\*|{))",
                "(?:function\\s*\\(\\s*\\)\\s*\\{|\\$\\(\\s*['\"].*['\"]\\s*\\)\\.html\\(|document\\.write\\([^\\)]*\\)|eval\\([^\\)]*\\))",
                "(?:\\)\\s*when\\s*\\d+\\s*then)|(?:\"\\s*(?:#|--|{))|(?:\\/\\*!\\s?\\d+)|(?:ch(?:a)?r\\s*\\(\\s*\\d)|(?:(?:(n?and|x?or|not)\\s+|\\|\\||\\&\\&)\\s*\\w+\\()",
                "(?:(?:[;]+|(<[?%](?:php)?)).*[^\\w](?:echo|print|print_r|var_dump|[fp]open))|(?:;\\s*rm\\s+-\\w+\\s+)|(?:;.*{.*\\$\\w+\\s*=)|(?:\\$\\w+\\s*\\[\\]\\s*=\\s*)",
                "(?:(?:\\/|\\\\)?\\.+(\\/|\\\\)(?:\\.+)?)|(?:\\w+\\.exe\\??\\s)|(?:;\\s*\\w+\\s*\\/[\\w*-]+\\/)|(?:\\d\\.\\dx\\|)|(?:%(?:c0\\.|af\\.|5c\\.))|(?:\\/(?:%2e){2})",
                "(?:[\\s()]case\\s*\\()|(?:\\)\\s*like\\s*\\()|(?:having\\s*[^\\s]+\\s*[^\\w\\s])|(?:if\\s?\\([\\d\\w]\\s*[=<>~])|(?:\\|\\|)",
                "(?:system\\(|exec\\(|shell_exec\\(|`.*`|passthru\\(|popen\\(|proc_open\\()",
                "(?:=\\s*\\w+\\s*\\+\\s*\")|(?:\\+=\\s*\\(\\s\")|(?:!+\\s*[\\d.,]+\\w?\\d*\\s*\\?)|(?:=\\s*\\[s*\\])|(?:\"\\s*\\+\\s*\")|(?:[^\\s]\\[\\s*\\d+\\s*\\]\\s*[;+])|(?:\"\\s*[&|]+\\s*\")|(?:\\/\\s*\\?\\s*\")|(?:\\/\\s*\\)\\s*\\[)|(?:\\d\\?.+:\\d)|(?:]\\s*\\[\\W*\\w)|(?:[^\\s]\\s*=\\s*\\/)",
                "(?:[\\d\\W]\\s+as\\s*[\"\\w]+\\s*from)|(?:^[\\W\\d]+\\s*(?:union|select|create|rename|truncate|load|alter|delete|update|insert|desc))|(?:(?:select|create|rename|truncate|load|alter|delete|update|insert|desc)\\s+(?:(?:group_)concat|char|load_file)\\s?\\(?)|(?:end\\s*\\);)|(\"\\s+regexp\\W)|(?:[\\s(]load_file\\s*\\()",
                "(?:%23.*?%0A)",
                "(?:\<\/\w+\s\w+)|(?:@(?:cc_on|set)[\s@,\"=])",
                "(?:[\s\d\/\"]+(?:on\w+|style|poster|background)=[$\"\w])|(?:-type\s*:\s*multipart)",
                "([^*:\\s\\w,.\\/?+-]\\s*)?(?<![a-z]\\s)(?<![a-z\\/_@\\-\\|])(\\s*return\\s*)?(?:create(?:element|attribute|textnode)|[a-z]+events?|setattribute|getelement\\w+|appendchild|createrange|createcontextualfragment|removenode|parentnode|decodeuricomponent|\\wettimeout|(?:ms)?setimmediate|option|useragent)(?(1)[^\\w%\"]|(?:\\s*[^@\\s\\w%\",.+\\-]))",
                "([^*:\\s\\w,.\\/?+-]\\s*)?(?<![a-z]\\s)(?<![a-z\\/_@])(\\s*return\\s*)?(?:hash|name|href|navigateandfind|source|pathname|close|constructor|port|protocol|assign|replace|back|forward|document|ownerdocument|window|top|this|self|parent|frames|_?content|date|cookie|innerhtml|innertext|csstext+?|outerhtml|print|moveby|resizeto|createstylesheet|stylesheets)(?(1)[^\\w%\"]|(?:\\s*[^@\\/\\s\\w%.+\\-]))",
                "(?:\.pl\?\w+=\w?\|\w+;)|(?:\|\(\w+=\*)|(?:\*\s*\)+\s*;)",
                "(?:@[\\w-]+\\s*\\()|(?:]\\s*\\(\\s*[\"!]\\s*\\w)|(?:<[?%](?:php)?.*(?:[?%]>)?)|(?:;[\\s\\w|]*\\$\\w+\\s*=)|(?:\\$\\w+\\s*=(?:(?:\\s*\\$?\\w+\\s*[(;])|\\s*\".*\"))|(?:;\\s*\\{\\W*\\w+\\s*\\()",
                "(?:(sleep\((\s*)(\d*)(\s*)\)|benchmark\((.*)\,(.*)\)))",
                "(?:\\\\u00[a-f0-9]{2})|(?:\\\\x0*[a-f0-9]{2})|(?:\\\\\\d{2,3})",
                "(?:^>[\w\s]*<\/?\w{2,}>)",
                "(?:^(-0000023456|4294967295|4294967296|2147483648|2147483647|0000012345|-2147483648|-2147483649|0000023456|2.2250738585072007e-308|1e309)$)",
                "(?:\W\s*hash\s*[^\w\s-])|(?:\w+=\W*[^,]*,[^\s(]\s*\()|(?:\?\"[^\s\"]\":)|(?:(?<!\/)__[a-z]+__)|(?:(?:^|[\s)\]\}])(?:s|g)etter\s*=)",
                "(?:procedure\\s+analyse\\s*\\()|(?:;\\s*(declare|open)\\s+[\\w-]+)|(?:create\\s+(procedure|function)\\s*\\w+\\s*\\(\\s*\\)\\s*-)|(?:declare[^\\w]+[@#]\\s*\\w+)|(exec\\s*\\(\\s*@)",
                "(?:(?:msgbox|eval)\s*\+|(?:language\s*=\*vbscript))",
                "(?:\\b(?:select|union|insert|update|delete)\\b\\s*[\\w\\s,]+\\b(?:from|into)\\b|\\b(?:alter|create|drop)\\b\\s*\\w+\\b)",
                "(?:\"+.*[<=]\\s*\"[^\"]+\")|(?:\"\\s*\\w+\\s*=)|(?:>\\w=\\/)|(?:#.+\\)[\"\\s]*>)|(?:\"\\s*(?:src|style|on\\w+)\\s*=\\s*\")|(?:[^\"]?\"[,;\\s]+\\w*[\\[\\(])",
                "(?:\)\s*\[)|([^*\":\s\w,.\/?+-]\s*)?(?<![a-z]\s)(?<![a-z_@\|])(\s*return\s*)?(?:globalstorage|sessionstorage|postmessage|callee|constructor|content|domain|prototype|try|catch|top|call|apply|url|function|object|array|string|math|if|for\s*(?:each)?|elseif|case|switch|regex|boolean|location|(?:ms)?setimmediate|settimeout|setinterval|void|setexpression|namespace|while)(?(1)[^\w%\"]|(?:\s*[^@\s\w%\".+\-\/]))",
                "(?:\\.pl\\?\\w+=\\w?\\|\\w+;)|(?:\\|\\(\\w+=\\*)|(?:\\*\\s*\\)+\\s*;)",
                "(?:\\.\\s*\\w+\\W*=)|(?:\\W\\s*(?:location|document)\\s*\\W[^({[;]+[({[;])|(?:\\(\\w+\\?[:\\w]+\\))|(?:\\w{2,}\\s*=\\s*\\d+[^&\\w]\\w+)|(?:\\]\\s*\\(\\s*\\w+)",
                "(?:,\s*(?:alert|showmodaldialog|eval)\s*,)|(?::\s*eval\s*[^\s])|([^:\s\w,.\/?+-]\s*)?(?<![a-z\/_@])(\s*return\s*)?(?:(?:document\s*\.)?(?:.+\/)?(?:alert|eval|msgbox|showmod(?:al|eless)dialog|showhelp|prompt|write(?:ln)?|confirm|dialog|open))\s*(?:[^.a-z\s\-]|(?:\s*[^\s\w,.@\/+-]))|(?:java[\s\/]*\.[\s\/]*lang)|(?:\w\s*=\s*new\s+\w+)|(?:&\s*\w+\s*\)[^,])|(?:\+[\W\d]*new\s+\w+[\W\d]*\+)|(?:document\.\w)",
                "(?:\\d\"\\s+\"\\s+\\d)|(?:^admin\\s*\"|(\\/\\*)+\"+\\s?(?:--|#|\\/\\*|{)?)|(?:\"\\s*or[\\w\\s-]+\\s*[+<>=(),-]\\s*[\\d\"])|(?:\"\\s*[^\\w\\s]?=\\s*\")|(?:\"\\W*[+=]+\\W*\")|(?:\"\\s*[!=|][\\d\\s!=+-]+.*[\"(].*$)|(?:\"\\s*[!=|][\\d\\s!=]+.*\\d+$)|(?:\"\\s*like\\W+[\\w\"(])|(?:\\sis\\s*0\\W)|(?:where\\s[\\s\\w\\.,-]+\\s=)|(?:\"[<>~]+\")",
                "([^*:\s\w,.\/?+-]\s*)?(?<![a-z]\s)(?<![a-z\/_@\-\|])(\s*return\s*)?(?:join|pop|push|reverse|reduce|concat|map|shift|sp?lice|sort|unshift)(?(1)[^\w%\"]|(?:\s*[^@\s\w%,.+\-]))",
                "(?:(?:msgbox|eval)\\s*\\+|(?:language\\s*=\\*vbscript))",
                "(?:[\\s\\/\"]+[-\\w\\/\\\\\\*]+\\s*=.+(?:\\/\\s*>))",
                "(?:<!ENTITY\\s+%|\\bSYSTEM\\s+[\"']file:\\/\\/\\/|\\bENTITY\\s+\\w+\\s+SYSTEM\\s+[\"']http:\\/\\/)",
                "(?:[=(].+\?.+:)|(?:with\([^)]*\)\))|(?:\.\s*source\W)",
                "(?:alter\\s*\\w+.*character\\s+set\\s+\\w+)|(\";\\s*waitfor\\s+time\\s+\")|(?:\";.*:\\s*goto)",
                "(?:(((.*)\\%[c|d|i|e|f|g|o|s|u|x|p|n]){8}))",
                "(?:\\*\\)|\\(\\*\\)|\\(\\&\\)|\\(\\|\\)|\\(\\!\\))",
                "(?:%u(?:ff|00|e\\d)\\w\\w)|(?:(?:%(?:e\\w|c[^3\\W]|))(?:%\\w\\w)(?:%\\w\\w)?)",
                "(?:(?:[;]+|(<[?%](?:php)?)).*(?:define|eval|file_get_contents|include|require|require_once|set|shell_exec|phpinfo|system|passthru|preg_\\w+|execute)\\s*[\"(@])",
                "(?:\\<\\/\\w+\\s\\w+)|(?:@(?:cc_on|set)[\\s@,\"=])",
                "([^*:\\s\\w,.\\/?+-]\\s*)?(?<![a-z]\\s)(?<![a-z\\/_@\\-\\|])(\\s*return\\s*)?(?:join|pop|push|reverse|reduce|concat|map|shift|sp?lice|sort|unshift)(?(1)[^\\w%\"]|(?:\\s*[^@\\s\\w%,.+\\-]))",
                "([^*:\s\w,.\/?+-]\s*)?(?<![a-z]\s)(?<![a-z\/_@\-\|])(\s*return\s*)?(?:create(?:element|attribute|textnode)|[a-z]+events?|setattribute|getelement\w+|appendchild|createrange|createcontextualfragment|removenode|parentnode|decodeuricomponent|\wettimeout|(?:ms)?setimmediate|option|useragent)(?(1)[^\w%\"]|(?:\s*[^@\s\w%\",.+\-]))",
                "(?:\\\\x[01fe][\\db-ce-f])|(?:%[01fe][\\db-ce-f])|(?:&#[01fe][\\db-ce-f])|(?:\\\\[01fe][\\db-ce-f])|(?:&#x[01fe][\\db-ce-f])",
                "(?:=\\s*[$\\w]\\s*[\\(\\[])|(?:\\(\\s*(?:this|top|window|self|parent|_?content)\\s*\\))|(?:src\\s*=s*(?:\\w+:|\\/\\/))|(?:\\w+\\[(\"\\w+\"|\\w+\\|\\|))|(?:[\\d\\W]\\|\\|[\\d\\W]|\\W=\\w+,)|(?:\\/\\s*\\+\\s*[a-z\"])|(?:=\\s*\\$[^([]*\\()|(?:=\\s*\\(\\s*\")",
                "(?:[+\/]\s*name[\W\d]*[)+])|(?:;\W*url\s*=)|(?:[^\w\s\/?:>]\s*(?:location|referrer|name)\s*[^\/\w\s-])",
                "(?:etc\/\W*passwd)",
                "(?:(\%SYSTEMROOT\%))",
                "(?:\\[\\$(?:ne|eq|lte?|gte?|n?in|mod|all|size|exists|type|slice|or)\\])",
                "(?:(^|\\W)const\\s+[\\w\\-]+\\s*=)|(?:(?:do|for|while)\\s*\\([^;]+;+\\))|(?:(?:^|\\W)on\\w+\\s*=[\\w\\W]*(?:on\\w+|alert|eval|print|confirm|prompt))|(?:groups=\\d+\\(\\w+\\))|(?:(.)\\1{128,})",
                "(?:%u(?:ff|00|e\d)\w\w)|(?:(?:%(?:e\w|c[^3\W]|))(?:%\w\w)(?:%\w\w)?)",
                "(?:(union(.*)select(.*)from))",
                "(?:<form[^>]*\\s*action\\s*=\\s*[\"']\\s*http:\\/\\/example\\.com\\/attack\\s*[\"'][^>]*\\s*>\\s*<input[^>]*\\s*type\\s*=\\s*[\"']\\s*hidden\\s*[\"'][^>]*>)",
                "(?:\\b(?:alter\\b|create\\b|drop\\b)\\s*\\w+)",
                "(?:\)\s*when\s*\d+\s*then)|(?:\"\s*(?:#|--|{))|(?:\/\*!\s?\d+)|(?:ch(?:a)?r\s*\(\s*\d)|(?:(?:(n?and|x?or|not)\s+|\|\||\&\&)\s*\w+\()",
                "(?:(union(.*)select(.*)from))",
                "(?:alter\s*\w+.*character\s+set\s+\w+)|(\";\s*waitfor\s+time\s+\")|(?:\";.*:\s*goto)",
                "(?:\\b(?:select\\b|union\\b|insert\\b|update\\b|delete\\b)\\s*\\b(?:from|into)\\b\\s*\\w+)",
                "(?:[\d\W]\s+as\s*[\"\w]+\s*from)|(?:^[\W\d]+\s*(?:union|select|create|rename|truncate|load|alter|delete|update|insert|desc))|(?:(?:select|create|rename|truncate|load|alter|delete|update|insert|desc)\s+(?:(?:group_)concat|char|load_file)\s?\(?)|(?:end\s*\);)|(\"\s+regexp\W)|(?:[\s(]load_file\s*\()",
                "(?:function[^(]*\\([^)]*\\))|(?:(?:delete|void|throw|instanceof|new|typeof)[^\\w.]+\\w+\\s*[([])|([)\\]]\\s*\\.\\s*\\w+\\s*=)|(?:\\(\\s*new\\s+\\w+\\s*\\)\\.)",
                "(?:\/\w*\s*\)\s*\()|(?:\([\w\s]+\([\w\s]+\)[\w\s]+\))|(?:(?<!(?:mozilla\/\d\.\d\s))\([^)[]+\[[^\]]+\][^)]*\))|(?:[^\s!][{([][^({[]+[{([][^}\])]+[}\])][\s+\",\d]*[}\])])|(?:\"\)?\]\W*\[)|(?:=\s*[^\s:;]+\s*[{([][^}\])]+[}\])];)",
                "(?:create\\s+function\\s+\\w+\\s+returns)|(?:;\\s*(?:select|create|rename|truncate|load|alter|delete|update|insert|desc)\\s*[\\[(]?\\w{2,})",
                "(?:\"+.*[<=]\s*\"[^\"]+\")|(?:\"\s*\w+\s*=)|(?:>\w=\/)|(?:#.+\)[\"\s]*>)|(?:\"\s*(?:src|style|on\w+)\s*=\s*\")|(?:[^\"]?\"[,;\s]+\w*[\[\(])",
                "(?:union\s*(?:all|distinct|[(!@]*)\s*[([]*\s*select)|(?:\w+\s+like\s+\\\")|(?:like\s*\"\%)|(?:\"\s*like\W*[\"\d])|(?:\"\s*(?:n?and|x?or|not |\|\||\&\&)\s+[\s\w]+=\s*\w+\s*having)|(?:\"\s*\*\s*\w+\W+\")|(?:\"\s*[^?\w\s=.,;)(]+\s*[(@\"]*\s*\w+\W+\w)|(?:select\s*[\[\]()\s\w\.,\"-]+from)|(?:find_in_set\s*\()",
                "(?:etc\\/\\W*passwd)",
                "(?:\<base\s+)|(?:<!(?:element|entity|\[CDATA))",
                "(?:[\\s\\d\\/\"]+(?:on\\w+|style|poster|background)=[$\"\\w])|(?:-type\\s*:\\s*multipart)",
                "(?:=\s*[$\w]\s*[\(\[])|(?:\(\s*(?:this|top|window|self|parent|_?content)\s*\))|(?:src\s*=s*(?:\w+:|\/\/))|(?:\w+\[(\"\w+\"|\w+\|\|))|(?:[\d\W]\|\|[\d\W]|\W=\w+,)|(?:\/\s*\+\s*[a-z\"])|(?:=\s*\$[^([]*\()|(?:=\s*\(\s*\")",
                "(?:(?:[;]+|(<[?%](?:php)?)).*(?:define|eval|file_get_contents|include|require|require_once|set|shell_exec|phpinfo|system|passthru|preg_\w+|execute)\s*[\"(@])",
                "(?:%23.*?%0a)",
                "(?:\[\$(?:ne|eq|lte?|gte?|n?in|mod|all|size|exists|type|slice|or)\])",
                "(?:#@~\^\w+)|(?:\w+script:|@import[^\w]|;base64|base64,)|(?:\w\s*\([\w\s]+,[\w\s]+,[\w\s]+,[\w\s]+,[\w\s]+,[\w\s]+\))",
                "(?:--[^\n]*$)|(?:\<!-|-->)|(?:[^*]\/\*|\*\/[^*])|(?:(?:[\W\d]#|--|{)$)|(?:\/{3,}.*$)|(?:<!\[\W)|(?:\]!>)",
                "(?:select\\s*pg_sleep)|(?:waitfor\\s*delay\\s?\"+\\s?\\d)|(?:;\\s*shutdown\\s*(?:;|--|#|\\/\\*|{))",
                "(?:=\s*\d*\.\d*\?\d*\.\d*)|(?:[|&]{2,}\s*\")|(?:!\d+\.\d*\?\")|(?:\/:[\w.]+,)|(?:=[\d\W\s]*\[[^]]+\])|(?:\?\w+:\w+)",
                "(?:\"\\s*or\\s*\"?\\d)|(?:\\\\x(?:23|27|3d))|(?:^.?\"$)|(?:(?:^[\"\\\\]*(?:[\\d\"]+|[^\"]+\"))+\\s*(?:n?and|x?or|not|\\|\\||\\&\\&)\\s*[\\w\"[+&!@(),.-])|(?:[^\\w\\s]\\w+\\s*[|-]\\s*\"\\s*\\w)|(?:@\\w+\\s+(and|or)\\s*[\"\\d]+)|(?:@[\\w-]+\\s(and|or)\\s*[^\\w\\s])|(?:[^\\w\\s:]\\s*\\d\\W+[^\\w\\s]\\s*\".)|(?:\\Winformation_schema|table_name\\W)",
                "(?:<!--\\s*#\\s*include\\s*virtual=|\\$\\(fopen\\(|file_get_contents\\s*\\(\\\\?[\"'].+\\\\?[\"']\\)|<\\?php\\s*include\\s*\\\\?[\"'].+\\\\?[\"']\\?>)",
                "(?:=\s*\w+\s*\+\s*\")|(?:\+=\s*\(\s\")|(?:!+\s*[\d.,]+\w?\d*\s*\?)|(?:=\s*\[s*\])|(?:\"\s*\+\s*\")|(?:[^\s]\[\s*\d+\s*\]\s*[;+])|(?:\"\s*[&|]+\s*\")|(?:\/\s*\?\s*\")|(?:\/\s*\)\s*\[)|(?:\d\?.+:\d)|(?:]\s*\[\W*\w)|(?:[^\s]\s*=\s*\/)",
                "(?:(sleep\\((\\s*)(\\d*)(\\s*)\\)|benchmark\\((.*)\\,(.*)\\)))",
                "(?:(?:[;]+|(<[?%](?:php)?)).*[^\w](?:echo|print|print_r|var_dump|[fp]open))|(?:;\s*rm\s+-\w+\s+)|(?:;.*{.*\$\w+\s*=)|(?:\$\w+\s*\[\]\s*=\s*)",
                "(?:\\/\\w*\\s*\\)\\s*\\()|(?:\\([\\w\\s]+\\([\\w\\s]+\\)[\\w\\s]+\\))|(?:(?<!(?:mozilla\\/\\d\\.\\d\\s))\\([^)[]+\\[[^\\]]+\\][^)]*\\))|(?:[^\\s!][{([][^({[]+[{([][^}\\])]+[}\\])][\\s+\",\\d]*[}\\])])|(?:\"\\)?\\]\\W*\\[)|(?:=\\s*[^\\s:;]+\\s*[{([][^}\\])]+[}\\])];)",
                "(?:(((.*)\%[c|d|i|e|f|g|o|s|u|x|p|n]){8}))",
                "(?:\\/\\*.*\\*\\/|--.*\\n)",
                "(?:function[^(]*\([^)]*\))|(?:(?:delete|void|throw|instanceof|new|typeof)[^\w.]+\w+\s*[([])|([)\]]\s*\.\s*\w+\s*=)|(?:\(\s*new\s+\w+\s*\)\.)",
                "(?:\\({2,}\\+{2,}:{2,})|(?:\\({2,}\\+{2,}:+)|(?:\\({3,}\\++:{2,})|(?:\\$\\[!!!\\])",
                "([^*:\s\w,.\/?+-]\s*)?(?<![a-z]\s)(?<![a-z\/_@\-\|])(\s*return\s*)?(?:set|atob|btoa|charat|charcodeat|charset|concat|crypto|frames|fromcharcode|indexof|lastindexof|match|navigator|toolbar|menubar|replace|regexp|slice|split|substr|substring|escape|\w+codeuri\w*)(?(1)[^\w%\"]|(?:\s*[^@\s\w%,.+\-]))",
                "(?:,.*[)\da-f\"]\"(?:\".*\"|\Z|[^\"]+))|(?:\Wselect.+\W*from)|((?:select|create|rename|truncate|load|alter|delete|update|insert|desc)\s*\(\s*space\s*\()",
                "(?:\"\\s*\\*.+(?:or|id)\\W*\"\\d)|(?:\\^\")|(?:^[\\w\\s\"-]+(?<=and\\s)(?<=or\\s)(?<=xor\\s)(?<=nand\\s)(?<=not\\s)(?<=\\|\\|)(?<=\\&\\&)\\w+\\()|(?:\"[\\s\\d]*[^\\w\\s]+\\W*\\d\\W*.*[\"\\d])|(?:\"\\s*[^\\w\\s?]+\\s*[^\\w\\s]+\\s*\")|(?:\"\\s*[^\\w\\s]+\\s*[\\W\\d].*(?:#|--))|(?:\".*\\*\\s*\\d)|(?:\"\\s*or\\s[^\\d]+[\\w-]+.*\\d)|(?:[()*<>%+-][\\w-]+[^\\w\\s]+\"[^,])",
                "(?:^(-0000023456|4294967295|4294967296|2147483648|2147483647|0000012345|-2147483648|-2147483649|0000023456|2.2250738585072007e-308|1e309)$)",
                "(?:(?:vbs|vbscript|data):.*[,+])|(?:\w+\s*=\W*(?!https?)\w+:)|(jar:\w+:)|(=\s*\"?\s*vbs(?:ript)?:)|(language\s*=\s?\"?\s*vbs(?:ript)?)|on\w+\s*=\*\w+\-\"?",
                "(?:\\sexec\\s+xp_cmdshell)|(?:\"\\s*!\\s*[\"\\w])|(?:from\\W+information_schema\\W)|(?:(?:(?:current_)?user|database|schema|connection_id)\\s*\\([^\\)]*)|(?:\";?\\s*(?:select|union|having)\\s*[^\\s])|(?:\\wiif\\s*\\()|(?:exec\\s+master\\.)|(?:union select @)|(?:union[\\w(\\s]*select)|(?:select.*\\w?user\\()|(?:into[\\s+]+(?:dump|out)file\\s*\")",
                "(?:firefoxurl:\w+\|)|(?:(?:file|res|telnet|nntp|news|mailto|chrome)\s*:\s*[%&#xu\/]+)|(wyciwyg|firefoxurl\s*:\s*\/\s*\/)",
                "(?:[=(].+\\?.+:)|(?:with\\([^)]*\\)\\))|(?:\\.\\s*source\\W)",
                "(?:=\\s*\\d*\\.\\d*\\?\\d*\\.\\d*)|(?:[|&]{2,}\\s*\")|(?:!\\d+\\.\\d*\\?\")|(?:\\/:[\\w.]+,)|(?:=[\\d\\W\\s]*\\[[^]]+\\])|(?:\\?\\w+:\\w+)",
                "(?:[\s()]case\s*\()|(?:\)\s*like\s*\()|(?:having\s*[^\s]+\s*[^\w\s])|(?:if\s?\([\d\w]\s*[=<>~])",
                "(?:\\x[01fe][\db-ce-f])|(?:%[01fe][\db-ce-f])|(?:&#[01fe][\db-ce-f])|(?:\\[01fe][\db-ce-f])|(?:&#x[01fe][\db-ce-f])",
                "(?:[\\w.-]+@[\\w.-]+%(?:[01][\\db-ce-f])+\\w+:)",
                "(?:[^\\w\\s=]on(?!g\\&gt;)\\w+[^=_+-]*=[^$]+(?:\\W|\\&gt;)?)",
                "(?:(\\%SYSTEMROOT\\%))",
                "([^*\\s\\w,.\\/?+-]\\s*)?(?<![a-mo-z]\\s)(?<![a-z\\/_@])(\\s*return\\s*)?(?:alert|inputbox|showmod(?:al|eless)dialog|showhelp|infinity|isnan|isnull|iterator|msgbox|executeglobal|expression|prompt|write(?:ln)?|confirm|dialog|urn|(?:un)?eval|exec|execscript|tostring|status|execute|window|unescape|navigate|jquery|getscript|extend|prototype)(?(1)[^\\w%\"]|(?:\\s*[^@\\s\\w%\",.:\\/+\\-]))",
                "(?:\\<[\\/]?(?:[i]?frame|applet|isindex|marquee|keygen|script|input|button|textarea|style|base|body|meta|link|object|embed|param|plaintext|xm\\w+|image))",
                "(?:@.+=\\s*\\(\\s*select)|(?:\\d+\\s*or\\s*\\d+\\s*[\\-+])|(?:\\/\\w+;?\\s+(?:having|and|or|select)\\W)|(?:\\d\\s+group\\s+by.+\\()|(?:(?:;|#|--)\\s*(?:drop|alter))|(?:(?:;|#|--)\\s*(?:update|insert)\\s*\\w{2,})|(?:[^\\w]SET\\s*@\\w+)|(?:(?:n?and|x?or|not |\\|\\||\\&\\&)[\\s(]+\\w+[\\s)]*[!=+]+[\\s\\d]*[\"=()])",
                "(?:^>[\\w\\s]*<\\/?\\w{2,}>)",
                "(?:\sexec\s+xp_cmdshell)|(?:\"\s*!\s*[\"\w])|(?:from\W+information_schema\W)|(?:(?:(?:current_)?user|database|schema|connection_id)\s*\([^\)]*)|(?:\";?\s*(?:select|union|having)\s*[^\s])|(?:\wiif\s*\()|(?:exec\s+master\.)|(?:union select @)|(?:union[\w(\s]*select)|(?:select.*\w?user\()|(?:into[\s+]+(?:dump|out)file\s*\")",
                "(?:,\\s*(?:alert|showmodaldialog|eval)\\s*,)|(?::\\s*eval\\s*[^\\s])|([^:\\s\\w,.\\/?+-]\\s*)?(?<![a-z\\/_@])(\\s*return\\s*)?(?:(?:document\\s*\\.)?(?:.+\\/)?(?:alert|eval|msgbox|showmod(?:al|eless)dialog|showhelp|prompt|write(?:ln)?|confirm|dialog|open))\\s*(?:[^.a-z\\s\\-]|(?:\\s*[^\\s\\w,.@\\/+-]))|(?:java[\\s\\/]*\\.[\\s\\/]*lang)|(?:\\w\\s*=\\s*new\\s+\\w+)|(?:&\\s*\\w+\\s*\\)[^,])|(?:\\+[\\W\\d]*new\\s+\\w+[\\W\\d]*\\+)|(?:document\\.\\w)",
                "(?:procedure\s+analyse\s*\()|(?:;\s*(declare|open)\s+[\w-]+)|(?:create\s+(procedure|function)\s*\w+\s*\(\s*\)\s*-)|(?:declare[^\w]+[@#]\s*\w+)|(exec\s*\(\s*@)",
                "(?:<script[^>]*>|alert\\([^\\)]*\\)|document\\.cookie)",
                "([^*\s\w,.\/?+-]\s*)?(?<![a-mo-z]\s)(?<![a-z\/_@])(\s*return\s*)?(?:alert|inputbox|showmod(?:al|eless)dialog|showhelp|infinity|isnan|isnull|iterator|msgbox|executeglobal|expression|prompt|write(?:ln)?|confirm|dialog|urn|(?:un)?eval|exec|execscript|tostring|status|execute|window|unescape|navigate|jquery|getscript|extend|prototype)(?(1)[^\w%\"]|(?:\s*[^@\s\w%\",.:\/+\-]))",
                "(?:\\b(?:join\\b|on\\b|where\\b|having\\b|group\\b|by\\b|order\\b|limit\\b)\\s*\\b\\w+)",
                "(?:include\\s*\\(.*\\)|require\\s*\\(.*\\)|file_get_contents\\s*\\(.*\\))",
                "(?:[\s\/\"]+[-\w\/\\\*]+\s*=.+(?:\/\s*>))",
                "(?:with\s*\(\s*.+\s*\)\s*\w+\s*\()|(?:(?:do|while|for)\s*\([^)]*\)\s*\{)|(?:\/[\w\s]*\[\W*\w)",
                "(?:\"\s*\*.+(?:or|id)\W*\"\d)|(?:\^\")|(?:^[\w\s\"-]+(?<=and\s)(?<=or\s)(?<=xor\s)(?<=nand\s)(?<=not\s)(?<=\|\|)(?<=\&\&)\w+\()|(?:\"[\s\d]*[^\w\s]+\W*\d\W*.*[\"\d])|(?:\"\s*[^\w\s?]+\s*[^\w\s]+\s*\")|(?:\"\s*[^\w\s]+\s*[\W\d].*(?:#|--))|(?:\".*\*\s*\d)|(?:\"\s*or\s[^\d]+[\w-]+.*\d)|(?:[()*<>%+-][\w-]+[^\w\s]+\"[^,])",
                "(?:merge.*using\s*\()|(execute\s*immediate\s*\")|(?:\W+\d*\s*having\s*[^\s\-])|(?:match\s*[\w(),+-]+\s*against\s*\()",
                "(?:(?:vbs|vbscript|data):.*[,+])|(?:\\w+\\s*=\\W*(?!https?)\\w+:)|(jar:\\w+:)|(=\\s*\"?\\s*vbs(?:ript)?:)|(language\\s*=\\s?\"?\\s*vbs(?:ript)?)|on\\w+\\s*=\\*\\w+\\-\"?",
                "(?:\\b(?:and\\b|or\\b|null\\b|not\\b|true\\b|false\\b)\\s*\\b(?:or\\b|and\\b)\\s*\\b\\w+)",
                "(?:(^|\W)const\s+[\w\-]+\s*=)|(?:(?:do|for|while)\s*\([^;]+;+\))|(?:(?:^|\W)on\w+\s*=[\w\W]*(?:on\w+|alert|eval|print|confirm|prompt))|(?:groups=\d+\(\w+\))|(?:(.)\1{128,})",
                "(?:firefoxurl:\\w+\\|)|(?:(?:file|res|telnet|nntp|news|mailto|chrome)\\s*:\\s*[%&#xu\\/]+)|(wyciwyg|firefoxurl\\s*:\\s*\\/\\s*\\/)",
                "(?:%c0%ae\\/)|(?:(?:\\/|\\\\)(home|conf|usr|etc|proc|opt|s?bin|local|dev|tmp|kern|[br]oot|sys|system|windows|winnt|program|%[a-z_-]{3,}%)(?:\\/|\\\\))|(?:(?:\\/|\\\\)inetpub|localstart\\.asp|boot\\.ini)",
                "(?:(select|;)\\s+(?:benchmark|if|sleep)\\s*?\\(\\s*\\(?\\s*\\w+)",
                "(?:in\s*\(+\s*select)|(?:(?:n?and|x?or|not |\|\||\&\&)\s+[\s\w+]+(?:regexp\s*\(|sounds\s+like\s*\"|[=\d]+x))|(\"\s*\d\s*(?:--|#))|(?:\"[%&<>^=]+\d\s*(=|or))|(?:\"\W+[\w+-]+\s*=\s*\d\W+\")|(?:\"\s*is\s*\d.+\"?\w)|(?:\"\|?[\w-]{3,}[^\w\s.,]+\")|(?:\"\s*is\s*[\d.]+\s*\W.*\")",
                "(?:\\<\\w*:?\\s(?:[^\\>]*)t(?!rong))|(?:\\<scri)|(<\\w+:\\w+)",
                "(?:@.+=\s*\(\s*select)|(?:\d+\s*or\s*\d+\s*[\-+])|(?:\/\w+;?\s+(?:having|and|or|select)\W)|(?:\d\s+group\s+by.+\()|(?:(?:;|#|--)\s*(?:drop|alter))|(?:(?:;|#|--)\s*(?:update|insert)\s*\w{2,})|(?:[^\w]SET\s*@\w+)|(?:(?:n?and|x?or|not |\|\||\&\&)[\s(]+\w+[\s)]*[!=+]+[\s\d]*[\"=()])",
                "(?:=\s*(?:top|this|window|content|self|frames|_content))|(?:\/\s*[gimx]*\s*[)}])|(?:[^\s]\s*=\s*script)|(?:\.\s*constructor)|(?:default\s+xml\s+namespace\s*=)|(?:\/\s*\+[^+]+\s*\+\s*\/)",
                "([^*:\\s\\w,.\\/?+-]\\s*)?(?<![a-z]\\s)(?<![a-z\\/_@\\-\\|])(\\s*return\\s*)?(?:set|atob|btoa|charat|charcodeat|charset|concat|crypto|frames|fromcharcode|indexof|lastindexof|match|navigator|toolbar|menubar|replace|regexp|slice|split|substr|substring|escape|\\w+codeuri\\w*)(?(1)[^\\w%\"]|(?:\\s*[^@\\s\\w%,.+\\-]))",
                "(?:\<\w*:?\s(?:[^\>]*)t(?!rong))|(?:\<scri)|(<\w+:\w+)",
                "(?:[^:\\s\\w]+\\s*[^\\w\\/](href|protocol|host|hostname|pathname|hash|port|cookie)[^\\w])",
                "(?:binding\\s?=|moz-binding|behavior\\s?=)|(?:[\\s\\/]style\\s*=\\s*[-\\\\])",
                "(?:\\<base\\s+)|(?:<!(?:element|entity|\\[CDATA))",
                "(?:(select|;)\s+(?:benchmark|if|sleep)\s*?\(\s*\(?\s*\w+)",
                //ADD MORE RULES HERE
            ];

            foreach ($params as $key => $value) {
                if (is_array($value)) {
                    self::parametersFilter($value);
                } else {
                    foreach ($wafRules as $rule) {
                        if (preg_match("/$rule/", strtolower($value), $matches)) {
                            self::block();
                        }
                    }
                }
            }
        }

        public static function applySecurity()
        {
            if (!empty($_GET)) {
                self::parametersFilter($_GET);
            }

            if (!empty($_POST)) {
                self::parametersFilter($_POST);
            }
        }
    }

    Security::setHeaders();
    Security::applySecurity();
}
?>
