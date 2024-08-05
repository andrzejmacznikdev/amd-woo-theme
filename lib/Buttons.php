<?php
    namespace AMDWooTheme;

    class Buttons
    {
        public static function btnPrimary($button): string
        {
            $btn = '<a href="'.$button['url'].'" target="'.$button['target'].'" class="btn btn-primary">';
            $btn .= '<span class="text">'.$button['title'].'</span>';
            $btn .= '<span class="icon"><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM13.5303 6.53033C13.8232 6.23744 13.8232 5.76256 13.5303 5.46967L8.75736 0.696699C8.46447 0.403806 7.98959 0.403806 7.6967 0.696699C7.40381 0.989593 7.40381 1.46447 7.6967 1.75736L11.9393 6L7.6967 10.2426C7.40381 10.5355 7.40381 11.0104 7.6967 11.3033C7.98959 11.5962 8.46447 11.5962 8.75736 11.3033L13.5303 6.53033ZM1 6.75H13V5.25H1V6.75Z" fill="white"/></svg></span>';
            $btn .= '</a>';

            return $btn;
        }

        public static function btnSecondary($button): string
        {
            $btn = '<a href="'.$button['url'].'" target="'.$button['target'].'" class="btn btn-secondary">';
            $btn .= '<span class="text">'.$button['title'].'</span>';
            $btn .= '<span class="icon"></span>';
            $btn .= '</a>';

            return $btn;
        }
    }