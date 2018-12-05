function ConvertirTexto () {
            var selText = "";
            if (window.getSelection) {  // all browsers, except IE before version 9
                if (document.activeElement && 
                        (document.activeElement.tagName.toLowerCase () == "input")) 
                {
                    var text = document.activeElement.value;
                    selText = text.substring (document.activeElement.selectionStart, 
                                              document.activeElement.selectionEnd);
                }
                
            } 
            return selText;
        }