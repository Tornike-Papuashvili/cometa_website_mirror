<?php
 class SimpleCaptcha { public $m_CaptchaConfiguration; public $m_CaptchaPersistence; private $_I6u5o4froccyolp1; private $_Obyotulctijg26yn; private $_oiuc57t29dytdcrt; private $_I2pxqgvmhmqkc6wpocehd; private $_18vri83l6b5ujvo65fw5e; private $_lbp10pn7un44xb22; private $_lh24hncanoymhas3hhprp; private $_omgrtm3y93w2p2wnax680; private $_0gkv83t19v0exjyr; private $_Opi81zjsv6d6ivk7; private $_l6cspfpzp4eositztaurw; private $_I5voff63gi1suaii; private $_1s0wd7ghc9zd8udv64zqu; private $_1jjwqw2289mcgqwcbuvqs; private $_li185992h2n51l8xbhsxoxfe9f; private $_Ioa7hc8i67rt1qxanzr1222bem; private $_imoyu7k3m5fqt128; private $_1aql9peuaaf96ho9vdrpxi1ffl; private $_ommaz66iz9zmfok8wnzqq; private $_1bw6tueou4o8vt2tb5qetoyt83; private $_1sfs0uc9m6z9zjygk5889zkmyf; private $_1hqigxlw1xx80zptneri1; private $_17j9uh21pxnsqb3xxczh3; private $_I7f8oer8uz6d5wp5; private $_05ngvxv8whch2joip34j6i72lg; private $_iq26z0doltj8cmjlj52ga3uwbb; private $_lfrqgo7b0fddgqi9; private $_ixkdhuri2smvp950iv5wqyxwdx; private $_i5ys1arvoikr8en9l6qvf; private $_138mxgo0xb6a7jfa; const DefaultCaptchaStyleName = "\144\145\x66\x61\165\154\164\103\141\160\x74\x63\150\x61"; const TabIndexNotSet = -255; public function __construct($_or91tcu1rzmckxis22bmo = self::DefaultCaptchaStyleName, $_Iulmkwsvtws50nz7g09r0ho6e9 = null) { $_i4z5wthofte7okrn = new BDC_SimpleCaptchaFileConfigurationManager(); $_ocarcscr5pn3y9fl = $_i4z5wthofte7okrn->LoadConfig(); $this->m_CaptchaConfiguration = new BDC_SimpleCaptchaConfiguration($_ocarcscr5pn3y9fl, $_or91tcu1rzmckxis22bmo); new BDC_CaptchaLogging($this->m_CaptchaConfiguration->IsErrorLoggingEnabled()); if ($_or91tcu1rzmckxis22bmo !== self::DefaultCaptchaStyleName) { if ($_ocarcscr5pn3y9fl->GetCaptchaStyleSectionByName($_or91tcu1rzmckxis22bmo) === null) { throw new CaptchaStyleNameNotFoundException(sprintf(BDC_Resources::GetCaptchaStyleNameNotFoundErrorMessage(), $_or91tcu1rzmckxis22bmo)); } } $_o90ep4w8my5rq4y8to1w6zg5uq = $this->m_CaptchaConfiguration->GetPersistenceProvider(); $this->m_CaptchaPersistence = new SimpleCaptchaPersistence($_o90ep4w8my5rq4y8to1w6zg5uq); $this->_I6u5o4froccyolp1 = new BDC_SimpleCaptchaBase($_or91tcu1rzmckxis22bmo, $this->m_CaptchaConfiguration, $_o90ep4w8my5rq4y8to1w6zg5uq, $_Iulmkwsvtws50nz7g09r0ho6e9); $this->_Obyotulctijg26yn = $this->m_CaptchaConfiguration->GetUserInputID(); $this->_oiuc57t29dytdcrt = $this->m_CaptchaConfiguration->GetImageTooltip(); $this->_I2pxqgvmhmqkc6wpocehd = $this->m_CaptchaConfiguration->GetSoundTooltip(); $this->_18vri83l6b5ujvo65fw5e = $this->m_CaptchaConfiguration->GetReloadTooltip(); $this->_lbp10pn7un44xb22 = $this->m_CaptchaConfiguration->GetHelpLinkText(); $this->_lh24hncanoymhas3hhprp = $this->m_CaptchaConfiguration->GetHelpLinkUrl(); $this->_omgrtm3y93w2p2wnax680 = $this->m_CaptchaConfiguration->IsReloadEnabled(); $this->_0gkv83t19v0exjyr = $this->m_CaptchaConfiguration->IsUseSmallIcons(); $this->_Opi81zjsv6d6ivk7 = $this->m_CaptchaConfiguration->IsUseHorizontalIcons(); $this->_l6cspfpzp4eositztaurw = $this->m_CaptchaConfiguration->GetSoundIconUrl(); $this->_I5voff63gi1suaii = $this->m_CaptchaConfiguration->GetReloadIconUrl(); $this->_1s0wd7ghc9zd8udv64zqu = $this->m_CaptchaConfiguration->GetIconsDivWidth(); $this->_1jjwqw2289mcgqwcbuvqs = -255; $this->_li185992h2n51l8xbhsxoxfe9f = $this->m_CaptchaConfiguration->GetAdditionalCssClasses(); $this->_Ioa7hc8i67rt1qxanzr1222bem = $this->m_CaptchaConfiguration->GetAdditionalInlineCss(); $this->_imoyu7k3m5fqt128 = $this->m_CaptchaConfiguration->IsAddCssInclude(); $this->_1aql9peuaaf96ho9vdrpxi1ffl = $this->m_CaptchaConfiguration->IsAddScriptInclude(); $this->_ommaz66iz9zmfok8wnzqq = $this->m_CaptchaConfiguration->IsAutoUppercaseInput(); $this->_1bw6tueou4o8vt2tb5qetoyt83 = $this->m_CaptchaConfiguration->IsAutoFocusInput(); $this->_1sfs0uc9m6z9zjygk5889zkmyf = $this->m_CaptchaConfiguration->IsAutoClearInput(); $this->_1hqigxlw1xx80zptneri1 = $this->m_CaptchaConfiguration->IsAutoReloadExpiredCaptchas(); $this->_17j9uh21pxnsqb3xxczh3 = $this->m_CaptchaConfiguration->GetAutoReloadTimeout(); $this->_I7f8oer8uz6d5wp5 = $this->m_CaptchaConfiguration->GetSoundStartDelay(); $this->_05ngvxv8whch2joip34j6i72lg = $this->m_CaptchaConfiguration->IsRemoteScriptEnabled(); $this->_ixkdhuri2smvp950iv5wqyxwdx = $this->m_CaptchaConfiguration->GetYourAppBackendHostName(); $this->_iq26z0doltj8cmjlj52ga3uwbb = $this->m_CaptchaConfiguration->GetImageColorMode(); $this->_i5ys1arvoikr8en9l6qvf = $this->m_CaptchaConfiguration->IsJavaScriptRequired(); $this->_lfrqgo7b0fddgqi9 = $this->_ixkdhuri2smvp950iv5wqyxwdx . $this->m_CaptchaConfiguration->GetHandlerUrl(); } public function get_CaptchaBase() { return $this->_I6u5o4froccyolp1; } public function get_CaptchaPersistence() { return $this->m_CaptchaPersistence; } public function get_Configuration() { return $this->m_CaptchaConfiguration; } public function get_CurrentCaptchaId() { return $this->_I6u5o4froccyolp1->CaptchaId; } public function get_UserInputID() { return $this->_Obyotulctijg26yn; } public function set_SoundEnabled($_ipte3kqyluizkkpb) { $this->_I6u5o4froccyolp1->SoundEnabled = $_ipte3kqyluizkkpb; } public function IsLimitSoundRegeneration() { return (SoundRegenerationMode::Limited == $this->_I6u5o4froccyolp1->SoundRegenerationMode); } public function get_ImageTooltip() { if (BDC_StringHelper::HasValue($this->_oiuc57t29dytdcrt)) { return $this->_oiuc57t29dytdcrt; } else { return $this->_I6u5o4froccyolp1->Localization->ImageTooltip; } } public function get_SoundTooltip() { if ($this->SoundPackageMissing && $this->m_CaptchaConfiguration->IsWarnAboutMissingSoundPackages()) { return "\74\145\155\76\x43\141\160\164\143\150\141\x20\163\x6f\x75\156\x64\x20\151\163\x20\145\x6e\x61\142\154\x65\144\x2c\40\x62\x75\x74\40\x74\150\x65\x20\x70\162\x6f\156\165\x6e\143\x69\x61\x74\151\157\x6e\40\163\157\x75\156\144\x20\160\141\x63\153\141\x67\145\x20\x72\145\161\x75\151\162\145\144\x20\146\157\162\40\164\150\x65\40\143\x75\x72\162\x65\x6e\164\x20\154\157\143\141\154\145\40\x63\141\156\x20\156\157\x74\40\142\x65\40\x66\157\165\x6e\144\x2e\x3c\x2f\x65\155\x3e\x20\n\74\145\x6d\x3e\124\157\40\145\x6e\x61\142\x6c\145\x20\x43\x61\160\x74\x63\150\141\40\x73\157\x75\x6e\x64\40\x66\157\162\40\164\150\x69\163\40\x6c\x6f\143\x61\154\x65\54\x20\x70\154\x65\141\x73\145\40\144\x65\x70\x6c\x6f\x79\40\x74\x68\x65\40\141\x70\x70\x72\x6f\x70\x72\x69\x61\164\x65\40\x73\157\165\156\144\x20\160\141\143\x6b\x61\147\x65\x20\164\157\40\x74\x68\145\40\x3c\x63\x6f\x64\x65\76\\l\x69\x62\\b\x6f\164\144\x65\x74\x65\x63\164\\R\145\163\x6f\165\x72\x63\x65\x73\\S\x6f\165\156\144\163\\<\57\x63\157\144\145\76\40\146\x6f\154\x64\x65\162\40\x6f\146\40\164\150\x65\x20\102\x6f\164\104\x65\x74\145\143\x74\40\120\110\x50\x20\x43\141\160\x74\x63\150\x61\40\x6c\151\x62\x72\x61\162\171\56\x20\x46\x6f\x72\40\x65\170\141\x6d\160\154\145\54\40\x75\163\x65\40\x3c\x63\x6f\144\145\x3e\x50\x72\x6f\x6e\165\156\x63\151\x61\x74\x69\157\156\x5f\x45\x6e\147\x6c\x69\163\150\137\107\102\56\142\x64\163\x70\x3c\57\x63\x6f\144\145\x3e\40\146\x6f\162\x20\102\162\x69\164\151\163\x68\x20\105\x6e\x67\x6c\x69\163\x68\x20\103\x61\160\164\x63\x68\x61\x20\163\157\165\156\144\163\x2e\x3c\x2f\x65\x6d\76\40\n\74\x65\x6d\x3e\x54\157\x20\144\151\163\141\x62\x6c\145\40\x74\150\x69\x73\x20\x77\x61\x72\156\x69\x6e\147\40\x61\x6e\144\x20\162\145\155\157\x76\x65\40\164\x68\145\x20\163\x6f\165\x6e\144\40\151\x63\157\156\x20\x66\157\x72\x20\164\150\x65\x20\143\x75\x72\162\x65\156\x74\40\x43\141\160\x74\x63\x68\x61\x20\154\x6f\143\141\x6c\x65\x2c\x20\163\x65\x74\x20\74\x63\157\144\145\76\$\x42\157\164\x44\x65\164\x65\143\164\55\x3e\127\x61\x72\156\x41\142\x6f\x75\164\x4d\x69\x73\x73\x69\156\x67\123\x6f\165\156\x64\120\141\x63\153\141\x67\145\163\40\75\40\x66\141\x6c\x73\x65\x3b\74\57\x63\x6f\144\145\76\40\151\156\40\x74\x68\x65\40\x3c\143\157\144\x65\x3e\103\x61\x70\164\143\x68\141\x43\x6f\x6e\146\151\147\x2e\160\x68\x70\x3c\x2f\143\x6f\144\145\76\x20\x66\x69\x6c\145\x2e\40\x54\x6f\40\162\x65\155\157\x76\145\x20\x74\150\145\40\163\x6f\x75\156\144\40\151\x63\x6f\156\x20\x66\x6f\162\40\141\x6c\x6c\40\154\x6f\143\141\x6c\x65\163\54\40\x73\151\x6d\160\154\x79\40\163\x65\164\40\x3c\x63\x6f\x64\x65\x3e\$\102\x6f\x74\x44\145\x74\x65\143\x74\x2d\76\x53\157\165\156\144\105\x6e\x61\x62\x6c\x65\144\x20\x3d\40\x66\x61\x6c\x73\145\x3b\x3c\57\143\x6f\x64\x65\x3e\x2e\74\x2f\x65\x6d\x3e"; } if (BDC_StringHelper::HasValue($this->_I2pxqgvmhmqkc6wpocehd)) { return $this->_I2pxqgvmhmqkc6wpocehd; } else { return $this->_I6u5o4froccyolp1->Localization->SoundTooltip; } } public function get_CaptchaSoundAvailable() { return BDC_SoundGeneratorFacade::IsPronunciationAvailable($this->_I6u5o4froccyolp1->Localization); } public function get_SoundPackageMissing() { return ($this->SoundEnabled && !$this->CaptchaSoundAvailable); } public function get_ReloadTooltip() { if (BDC_StringHelper::HasValue($this->_18vri83l6b5ujvo65fw5e)) { return $this->_18vri83l6b5ujvo65fw5e; } else { return $this->Localization->ReloadTooltip; } } public function get_HelpLinkText() { if (BDC_StringHelper::HasValue($this->_lbp10pn7un44xb22)) { return BDC_HelpLinkHelper::GetHelpLinkText($this->_lbp10pn7un44xb22, $this->ImageWidth); } else { return BDC_HelpLinkHelper::GetDefaultText($this->ImageWidth); } } public function get_HelpLinkUrl() { BDC_HelpLinkHelper::GetDefaultUrl($this->Localization); } public function get_ReloadEnabled() { return $this->_omgrtm3y93w2p2wnax680; } public function get_RenderIcons() { return ($this->SoundEnabled || $this->ReloadEnabled); } public function get_UseSmallIcons() { if (is_bool($this->_0gkv83t19v0exjyr)) { return $this->_0gkv83t19v0exjyr; } else { return ($this->ImageHeight < 50); } } public function get_UseHorizontalIcons() { if (is_bool($this->_Opi81zjsv6d6ivk7)) { return $this->_Opi81zjsv6d6ivk7; } else { return ($this->ImageHeight < 40); } } public function get_SoundIconUrl() { $_od240lh5oq2h7huiyvo0ao56wu = null; if (BDC_StringHelper::HasValue($this->_l6cspfpzp4eositztaurw)) { $_od240lh5oq2h7huiyvo0ao56wu = $this->_l6cspfpzp4eositztaurw; } else { $_od240lh5oq2h7huiyvo0ao56wu = SimpleCaptchaUrls::DefaultSoundIconUrl($this->HandlerUrl); if ($this->UseSmallIcons) { $_od240lh5oq2h7huiyvo0ao56wu = SimpleCaptchaUrls::SmallIconUrl($_od240lh5oq2h7huiyvo0ao56wu); } } if ($this->SoundPackageMissing && $this->m_CaptchaConfiguration->IsWarnAboutMissingSoundPackages()) { $_od240lh5oq2h7huiyvo0ao56wu = SimpleCaptchaUrls::DisabledIconUrl($_od240lh5oq2h7huiyvo0ao56wu); } return $_od240lh5oq2h7huiyvo0ao56wu; } public function get_ReloadIconUrl() { $_Og58s7viib3gy7b5 = null; if (BDC_StringHelper::HasValue($this->_I5voff63gi1suaii)) { $_Og58s7viib3gy7b5 = $this->_I5voff63gi1suaii; } else { $_Og58s7viib3gy7b5 = SimpleCaptchaUrls::DefaultReloadIconUrl($this->HandlerUrl); if ($this->UseSmallIcons) { $_Og58s7viib3gy7b5 = SimpleCaptchaUrls::SmallIconUrl($_Og58s7viib3gy7b5); } } return $_Og58s7viib3gy7b5; } public function get_IconsDivWidth() { if (is_int($this->_1s0wd7ghc9zd8udv64zqu) && (0 < $this->_1s0wd7ghc9zd8udv64zqu)) { return $this->_1s0wd7ghc9zd8udv64zqu; } else { if ($this->UseHorizontalIcons) { return 2 * $this->get_IconSizeDefault() + 4 * BDC_CaptchaDefaults::IconSpacing; } else { return $this->get_IconSizeDefault() + BDC_SimpleCaptchaDefaults::IconSpacing; } } } public function get_IconSizeDefault() { if ($this->UseSmallIcons) { return BDC_SimpleCaptchaDefaults::SmallIconSize; } else { return BDC_SimpleCaptchaDefaults::IconSize; } } public function get_HelpLinkEnabled() { return true; } protected function GetAdjustedHeight() { return ($this->_I6u5o4froccyolp1->ImageHeight - BDC_SimpleCaptchaBase::HelpLinkHeight); } protected function GetHelpLinkHeight() { return BDC_SimpleCaptchaBase::HelpLinkHeight; } protected function GetHelpLinkFontSize() { return BDC_SimpleCaptchaBase::HelpLinkHeight - 1; } public function get_TabIndex() { return $this->_1jjwqw2289mcgqwcbuvqs; } private function to6f2($_Oijasdtkzc9q203isie01) { $this->_1jjwqw2289mcgqwcbuvqs = $_Oijasdtkzc9q203isie01; } public function IsTabIndexSet() { return (self::TabIndexNotSet != $this->_1jjwqw2289mcgqwcbuvqs); } public function get_AdditionalCssClasses() { return $this->_li185992h2n51l8xbhsxoxfe9f; } public function get_AdditionalInlineCss() { return $this->_Ioa7hc8i67rt1qxanzr1222bem; } public function get_AddCssInclude() { return $this->_imoyu7k3m5fqt128; } public function get_TotalWidth() { $_l8dcybogyo94kljt = $this->ImageWidth; if ($this->RenderIcons) { $_l8dcybogyo94kljt = $_l8dcybogyo94kljt + 3 * BDC_SimpleCaptchaDefaults::IconSpacing + $this->get_IconsDivWidth(); } return $_l8dcybogyo94kljt; } public function get_TotalHeight() { return $this->ImageHeight; } public function get_AddScriptInclude() { return $this->_1aql9peuaaf96ho9vdrpxi1ffl; } public function GetScriptIncludeMarkup() { return BDC_HtmlHelper::scriptInclude(SimpleCaptchaUrls::CaptchaScriptIncludeUrl($this->HandlerUrl, $this->CaptchaStyleName, $this->CurrentCaptchaId)); } public function get_HandlerUrl() { return $this->_lfrqgo7b0fddgqi9; } public function getYourAppBackendHostName() { return $this->_ixkdhuri2smvp950iv5wqyxwdx; } public function get_AutoUppercaseInput() { return $this->_ommaz66iz9zmfok8wnzqq; } public function get_AutoFocusInput() { return $this->_1bw6tueou4o8vt2tb5qetoyt83; } public function get_AutoClearInput() { return $this->_1sfs0uc9m6z9zjygk5889zkmyf; } public function get_AutoReloadExpiredCaptchas() { return $this->_1hqigxlw1xx80zptneri1; } public function get_AutoReloadTimeout() { return $this->_17j9uh21pxnsqb3xxczh3; } public function get_SoundStartDelay() { return $this->_I7f8oer8uz6d5wp5; } public function get_RemoteScriptEnabled() { return BDC_SimpleCaptchaScriptsHelper::GetRemoteScriptEnabled(true); } public function get_CaptchaImageUrl() { return SimpleCaptchaUrls::CaptchaImageUrl($this->HandlerUrl, $this->CaptchaStyleName, $this->CurrentCaptchaId); } public function get_CaptchaSoundUrl() { return SimpleCaptchaUrls::CaptchaSoundUrl($this->HandlerUrl, $this->CaptchaStyleName, $this->CurrentCaptchaId); } public function get_ImageClientId() { return $this->CaptchaStyleName . "\x5f\103\141\160\x74\143\x68\141\x49\155\141\x67\145"; } public function get_AudioPlaceholderClientId() { return $this->CaptchaStyleName . "\137\101\165\144\x69\157\120\x6c\141\143\x65\x68\157\x6c\x64\145\162"; } public function get_ValidatingCaptchaIdKey() { return "\102\x44\103\137\x56\x43\x49\x44\137" . $this->CaptchaStyleName; } public function get_ImageColorMode() { return $this->_iq26z0doltj8cmjlj52ga3uwbb; } public function IsHideCaptchaImage() { return ($this->_iq26z0doltj8cmjlj52ga3uwbb != ImageColorMode::None); } public function get_CaptchaImageStyleCss() { $_obfjgqlf8orqoacl = ""; if($this->IsHideCaptchaImage()) { $_obfjgqlf8orqoacl = "\x76\151\163\151\142\x69\154\x69\x74\x79\72\x20\150\x69\x64\x64\145\156\40\41\151\155\x70\157\162\x74\x61\156\164"; } return $_obfjgqlf8orqoacl; } public function get_ValidatingCaptchaId() { return $_REQUEST[$this->ValidatingCaptchaIdKey]; } public function IsJavaScriptRequired () { return $this->_i5ys1arvoikr8en9l6qvf; } public function Clear() { $this->m_CaptchaPersistence->getPersistenceProvider()->Clear(); } public function SaveCode($_i6e4xpbidfubwax9jnbb9, $_itlu1yt4gc03tvcdjfx4d) { $this->m_CaptchaPersistence->SaveCode($_i6e4xpbidfubwax9jnbb9, $_itlu1yt4gc03tvcdjfx4d); } public function SavePw($_0ma0hb645x39s9rrgxw84, $_17mwyxyi79m2t5zw) { if($_0ma0hb645x39s9rrgxw84->UseM()) { $this->m_CaptchaPersistence->SavePC($_17mwyxyi79m2t5zw, $_0ma0hb645x39s9rrgxw84->CaptchaBase->PC); } } public function Save($_oeg6ocnihb3udcb0) { $this->SavePw($_oeg6ocnihb3udcb0, $_oeg6ocnihb3udcb0->CurrentCaptchaId); } public function Html() { $this->Clear(); $this->_138mxgo0xb6a7jfa = $this->genPw($this->CurrentCaptchaId); $this->Save($this); $_Oz51gi3wvt4su46b = ""; $this->RenderXhtml11Strict($_Oz51gi3wvt4su46b); return $_Oz51gi3wvt4su46b; } public function RenderXhtml11Strict(&$_1t7skiv37mrdufhm) { if (!$this->CaptchaSoundAvailable && !$this->m_CaptchaConfiguration->IsWarnAboutMissingSoundPackages()) { $this->SoundEnabled = false; } $_1t7skiv37mrdufhm .= "\r\n"; $this->RenderCssIncludes($_1t7skiv37mrdufhm); $this->aefvj($_1t7skiv37mrdufhm); $_1t7skiv37mrdufhm .= sprintf("\x20\40\x3c\x64\151\166\40\x63\x6c\x61\x73\163\75\"\x42\104\103\137\x43\x61\x70\x74\x63\x68\x61\104\151\x76\40\x25\163\"\x20\151\x64\x3d\"\x25\163\137\x43\141\160\x74\x63\x68\x61\x44\151\166\"\x20\163\x74\171\154\x65\75\"\167\x69\144\x74\x68\x3a\x20\45\144\x70\x78\x20\x21\151\x6d\x70\x6f\x72\164\141\156\164\x3b\x20\x68\x65\151\x67\150\x74\72\40\45\x64\160\170\40\41\151\x6d\x70\157\x72\x74\141\x6e\x74\x3b\x20\45\x73\"\76\74\x21\55\55", $this->AdditionalCssClasses, $this->CaptchaStyleName, $this->TotalWidth, $this->TotalHeight, $this->AdditionalInlineCss); $_1t7skiv37mrdufhm .= "\r\n"; $this->RenderCaptchaImageMarkup($_1t7skiv37mrdufhm); $this->RenderCaptchaIcons($_1t7skiv37mrdufhm); $this->RenderScriptIncludes($_1t7skiv37mrdufhm); $this->RenderHiddenFields($_1t7skiv37mrdufhm); $_1t7skiv37mrdufhm .= "\r\n"; $_1t7skiv37mrdufhm .= "\40\40\74\x2f\144\151\166\76"; $_1t7skiv37mrdufhm .= "\r\n"; } private function aefvj(&$_13d8wicwvatf2zpw8rvrzavhfv) { $this->RenderTestModeWarning($_13d8wicwvatf2zpw8rvrzavhfv); } protected function RenderTestModeWarning(&$_is6bcnddm3r8nxxdzsm503006r) { if ($this->m_CaptchaConfiguration->IsTestModeEnabled()) { $_is6bcnddm3r8nxxdzsm503006r .= "\74\160\x20\x63\x6c\x61\x73\x73\x3d\"\x42\x44\x43\x5f\127\141\162\156\151\x6e\147\"\76\x54\x65\163\164\x20\x4d\x6f\144\145\40\x45\156\x61\x62\154\x65\144\x3c\57\160\76"; } } protected function RenderCaptchaImageMarkup(&$_i5i5v413shb2x7gv) { $_i5i5v413shb2x7gv .= sprintf("\40\x2d\x2d\x3e\x3c\x64\151\x76\x20\x63\154\x61\x73\x73\x3d\"\102\x44\103\x5f\103\141\160\164\143\x68\x61\x49\x6d\x61\x67\x65\104\x69\x76\"\40\x69\144\x3d\"\45\163\137\103\x61\160\164\x63\150\141\x49\155\141\147\x65\104\x69\166\"\40\163\x74\x79\x6c\x65\75\"\x77\151\144\x74\150\x3a\40\45\144\160\170\x20\x21\x69\155\160\157\162\x74\x61\x6e\x74\73\40\150\145\151\x67\150\164\x3a\x20\x25\144\160\x78\40\x21\151\155\160\157\x72\164\x61\x6e\x74\73\"\x3e\x3c\41\x2d\x2d", $this->CaptchaStyleName, $this->ImageWidth, $this->ImageHeight); $_i5i5v413shb2x7gv .= "\r\n"; if (!$this->HelpLinkEnabled) { $this->RenderPlainImage($_i5i5v413shb2x7gv); } else { switch ($this->HelpLinkMode) { case HelpLinkMode::Image: $this->RenderLinkedImage($_i5i5v413shb2x7gv); break; case HelpLinkMode::Text: $this->RenderPlainImageWithTextLink($_i5i5v413shb2x7gv); break; } } $_i5i5v413shb2x7gv .= "\r\n"; if ($this->RenderIcons) { $_i5i5v413shb2x7gv .= "\x20\x2d\55\x3e\x3c\57\144\151\x76\x3e\x3c\x21\55\x2d"; } else { $_i5i5v413shb2x7gv .= "\x20\x20\x2d\x2d\76\x3c\x2f\x64\151\x76\x3e"; } } protected function RenderPlainImage(&$_0mkw2xo36ne6m1vmv1kst) { $_0mkw2xo36ne6m1vmv1kst .= sprintf("\x20\40\x20\55\55\x3e\x3c\151\x6d\147\40\143\154\141\x73\163\x3d\"\x42\x44\103\x5f\x43\x61\x70\x74\143\150\x61\x49\x6d\141\x67\145\"\x20\x69\144\75\"\45\x73\"\40\163\162\x63\75\"\x25\x73\"\x20\x61\x6c\x74\75\"\45\163\"\x20\x73\164\171\x6c\x65\75\"\45\x73\"\40\57\x3e\74\x21\x2d\55", $this->ImageClientId, ($this->CaptchaImageUrl), $this->ImageTooltip, $this->CaptchaImageStyleCss); } protected function RenderLinkedImage(&$_lrcr0x1dds1gyyss) { if ($this->IsTabIndexSet()) { $_lrcr0x1dds1gyyss .= sprintf("\x20\x20\40\x2d\x2d\x3e\x3c\x61\40\x68\162\x65\146\75\"\x25\x73\"\x20\164\x69\x74\154\x65\75\"\45\163\"\40\x74\141\142\151\x6e\x64\x65\170\75\"\x25\x64\"\40\151\144\x3d\"\x25\163\x5f\x48\x65\x6c\160\114\x69\x6e\153\"\x3e\x3c\151\155\147\x20\x63\x6c\x61\163\x73\75\"\102\x44\103\137\x43\x61\160\x74\143\x68\141\x49\x6d\141\x67\x65\"\40\151\x64\75\"\45\163\"\x20\x73\x72\x63\x3d\"\x25\163\"\40\141\x6c\164\75\"\45\163\"\x20\x73\164\171\x6c\145\75\"\45\163\"\x20\x2f\x3e\x3c\57\141\76\x3c\x21\55\55", $this->HelpLinkUrl, $this->HelpLinkText, $this->TabIndex, $this->CaptchaStyleName, $this->ImageClientId, $this->CaptchaImageUrl, $this->ImageTooltip, $this->CaptchaImageStyleCss); if ($this->TabIndex != -1) { $this->TabIndex = $this->TabIndex + 1; } } else { $_lrcr0x1dds1gyyss .= sprintf("\40\40\40\x2d\55\x3e\74\141\x20\x68\x72\145\x66\x3d\"\x25\163\"\40\x74\x69\x74\x6c\x65\75\"\x25\x73\"\40\x69\x64\75\"\45\x73\x5f\x48\x65\154\x70\114\151\x6e\153\"\76\74\x69\x6d\x67\40\143\154\x61\x73\x73\x3d\"\102\104\x43\137\103\x61\160\x74\143\150\141\111\155\141\x67\145\"\40\151\144\x3d\"\45\x73\"\40\x73\x72\143\75\"\45\x73\"\x20\141\x6c\164\x3d\"\45\x73\"\40\163\164\x79\154\145\75\"\x25\163\"\x20\57\76\74\57\x61\x3e\x3c\41\55\x2d", $this->HelpLinkUrl, $this->HelpLinkText, $this->CaptchaStyleName, $this->ImageClientId, $this->CaptchaImageUrl, $this->ImageTooltip, $this->CaptchaImageStyleCss); } } protected function RenderPlainImageWithTextLink(&$_19mxezeioncv54uq22rptxe9qp) { $_19mxezeioncv54uq22rptxe9qp .= sprintf("\40\x20\40\x2d\x2d\x3e\74\144\x69\166\x20\x63\154\x61\163\163\75\"\102\x44\103\137\x43\x61\x70\164\143\x68\141\x49\x6d\x61\147\x65\x44\x69\x76\"\40\163\164\171\x6c\145\75\"\x77\151\144\x74\x68\x3a\45\x64\x70\170\73\40\x68\145\x69\x67\150\x74\x3a\x25\144\160\x78\73\"\76\x3c\151\x6d\x67\x20\143\x6c\x61\x73\x73\75\"\102\104\103\x5f\x43\141\x70\x74\143\x68\x61\111\155\x61\x67\145\"\x20\x69\x64\x3d\"\45\x73\"\x20\x73\x72\x63\75\"\x25\163\"\40\141\x6c\x74\75\"\45\x73\"\40\x73\x74\171\154\x65\x3d\"\x25\163\"\40\57\76\74\x2f\144\151\166\76\x3c\x21\x2d\55", $this->ImageWidth, $this->GetAdjustedHeight(), $this->ImageClientId, $this->CaptchaImageUrl, $this->ImageTooltip, $this->CaptchaImageStyleCss); $_19mxezeioncv54uq22rptxe9qp .= "\r\n"; if ($this->IsTabIndexSet()) { $_19mxezeioncv54uq22rptxe9qp .= sprintf("\40\40\40\x2d\x2d\76\74\x61\40\150\x72\x65\x66\75\"\x25\163\"\40\x74\x69\x74\154\145\75\"\45\x73\"\x20\x74\141\142\151\x6e\x64\x65\170\75\"\45\144\"\40\x73\x74\171\x6c\145\75\"\144\x69\163\160\154\x61\x79\x3a\x20\x62\x6c\x6f\143\153\x20\41\x69\155\x70\157\162\164\141\156\164\x3b\x20\x68\x65\151\147\x68\164\x3a\40\45\144\x70\170\40\41\151\155\x70\157\162\x74\141\x6e\x74\x3b\40\x6d\141\x72\x67\151\x6e\x3a\x20\x30\40\x21\151\x6d\160\x6f\162\164\x61\156\164\73\x20\160\x61\x64\144\x69\156\x67\x3a\x20\60\x20\41\151\155\160\157\162\x74\141\x6e\164\x3b\x20\x66\x6f\x6e\164\x2d\x73\x69\x7a\145\x3a\40\45\144\160\170\40\x21\x69\155\160\x6f\162\x74\x61\x6e\164\73\40\154\151\156\145\55\150\145\151\147\x68\x74\72\x20\x25\144\x70\170\40\41\151\x6d\160\157\x72\x74\x61\x6e\x74\73\40\166\151\163\x69\x62\151\x6c\151\x74\171\72\x20\166\151\x73\151\142\154\145\40\x21\x69\x6d\160\157\162\164\141\156\164\73\x20\146\157\x6e\x74\x2d\146\141\x6d\x69\x6c\171\x3a\x20\126\x65\162\144\141\156\x61\54\x20\x44\145\152\x61\126\165\x20\x53\141\156\163\x2c\x20\102\x69\164\x73\x74\x72\x65\x61\x6d\x20\x56\145\x72\141\40\x53\x61\156\x73\x2c\x20\126\x65\162\x64\x61\x6e\x61\x20\x52\145\146\54\x20\x73\141\156\163\x2d\x73\145\x72\151\x66\40\41\151\x6d\160\x6f\x72\x74\141\156\164\x3b\x20\166\145\162\x74\151\x63\141\154\x2d\x61\154\x69\x67\x6e\x3a\x20\x6d\151\x64\x64\x6c\x65\x20\41\151\x6d\160\157\x72\164\x61\x6e\x74\x3b\40\x74\x65\x78\x74\55\x61\x6c\151\147\156\72\40\143\145\x6e\x74\x65\162\40\41\151\x6d\x70\x6f\162\x74\x61\156\x74\73\40\x74\x65\x78\x74\x2d\x64\145\x63\x6f\162\x61\164\x69\157\156\72\x20\x6e\x6f\156\x65\40\41\151\155\x70\x6f\x72\x74\x61\x6e\x74\73\x20\142\141\143\153\147\x72\x6f\165\x6e\x64\55\x63\157\154\157\x72\72\40\43\146\70\146\70\146\70\x20\41\151\x6d\160\x6f\162\164\x61\x6e\164\x3b\40\143\x6f\x6c\x6f\162\72\40\x23\x36\x30\x36\x30\x36\60\x20\x21\x69\x6d\x70\x6f\x72\x74\141\x6e\164\73\"\x3e\x25\x73\x3c\x2f\x61\76\74\x21\55\55", $this->HelpLinkUrl, $this->HelpLinkText, $this->TabIndex, $this->GetHelpLinkHeight(), $this->GetHelpLinkFontSize(), $this->GetHelpLinkHeight(), $this->HelpLinkText); if ($this->TabIndex != -1) { $this->TabIndex = $this->TabIndex + 1; } } else { $_19mxezeioncv54uq22rptxe9qp .= sprintf("\40\x20\x20\x2d\55\x3e\x3c\x61\40\x68\162\145\146\x3d\"\45\x73\"\40\x74\x69\x74\x6c\145\x3d\"\45\x73\"\40\x73\164\x79\x6c\x65\x3d\"\x64\151\x73\160\x6c\141\171\x3a\x20\142\154\157\143\153\x20\41\x69\x6d\x70\157\162\164\x61\x6e\x74\x3b\x20\150\145\151\x67\x68\x74\x3a\40\45\x64\x70\170\x20\x21\x69\155\160\157\162\x74\141\x6e\x74\x3b\40\155\141\162\x67\x69\156\x3a\x20\x30\x20\x21\151\x6d\160\x6f\x72\164\141\x6e\x74\73\40\x70\x61\144\144\151\x6e\147\x3a\x20\x30\x20\x21\x69\x6d\160\157\162\x74\x61\x6e\x74\x3b\40\146\157\156\164\55\163\x69\x7a\x65\x3a\x20\45\x64\x70\x78\40\41\x69\155\160\x6f\x72\164\x61\156\164\x3b\40\154\x69\156\x65\55\150\145\151\x67\x68\164\72\x20\x25\x64\160\170\x20\41\151\155\x70\157\162\164\x61\156\x74\73\x20\x76\x69\163\x69\142\151\154\151\x74\171\72\40\x76\151\x73\x69\x62\154\145\x20\41\151\x6d\160\157\162\x74\x61\156\164\73\x20\x66\157\x6e\164\x2d\x66\141\155\x69\154\171\72\40\x56\x65\162\144\141\156\x61\x2c\40\104\145\x6a\x61\x56\x75\40\x53\141\x6e\x73\54\40\102\151\x74\163\x74\162\145\x61\155\x20\x56\x65\162\141\40\123\x61\156\x73\x2c\x20\x56\x65\x72\x64\x61\156\x61\x20\122\145\x66\x2c\40\x73\141\x6e\x73\55\163\x65\x72\151\x66\x20\41\x69\155\160\x6f\162\164\x61\156\164\x3b\x20\x76\145\x72\x74\x69\x63\141\x6c\55\141\x6c\151\147\x6e\x3a\x20\155\151\144\x64\x6c\145\x20\41\x69\155\x70\x6f\x72\164\141\156\164\x3b\40\164\145\x78\164\55\x61\x6c\151\x67\156\72\40\143\145\x6e\164\145\162\x20\x21\x69\x6d\160\157\x72\164\x61\156\x74\x3b\40\164\145\170\x74\55\x64\145\143\157\162\x61\164\x69\157\x6e\x3a\40\156\x6f\156\x65\40\x21\x69\155\x70\157\162\x74\x61\156\x74\x3b\40\x62\141\143\153\x67\162\157\165\156\144\x2d\143\x6f\154\x6f\162\72\40\x23\146\x38\146\x38\146\x38\40\41\x69\155\x70\x6f\162\164\x61\156\x74\73\40\x63\x6f\x6c\x6f\162\x3a\x20\x23\x36\60\66\x30\66\x30\40\x21\151\155\x70\x6f\x72\x74\x61\x6e\x74\x3b\"\76\45\163\x3c\57\x61\x3e\74\41\55\55", $this->HelpLinkUrl, $this->HelpLinkText, $this->GetHelpLinkHeight(), $this->GetHelpLinkFontSize(), $this->GetHelpLinkHeight(), $this->HelpLinkText); } } protected function RenderCaptchaIcons(&$_Oa1ixaehdoo6v3t94e5b2) { if ($this->RenderIcons) { $_Oa1ixaehdoo6v3t94e5b2 .= "\r\n"; $_Oa1ixaehdoo6v3t94e5b2 .= sprintf("\x20\x2d\x2d\x3e\x3c\x64\x69\x76\x20\x63\x6c\x61\x73\163\x3d\"\x42\x44\103\137\x43\141\x70\164\143\150\x61\111\x63\157\x6e\x73\x44\151\x76\"\x20\x69\x64\x3d\"\45\163\137\x43\x61\160\x74\143\x68\x61\x49\x63\x6f\x6e\x73\x44\x69\166\"\40\163\164\171\154\x65\x3d\"\x77\151\x64\164\150\72\x20\x25\x64\x70\x78\40\x21\151\155\160\157\162\x74\x61\156\164\x3b\"\x3e\x3c\41\55\x2d", $this->CaptchaStyleName, $this->IconsDivWidth); $_Oa1ixaehdoo6v3t94e5b2 .= "\r\n"; } if ($this->ReloadEnabled) { if ($this->IsTabIndexSet()) { $_Oa1ixaehdoo6v3t94e5b2 .= sprintf("\40\40\x20\x2d\x2d\76\x3c\141\x20\143\x6c\141\x73\163\x3d\"\x42\x44\x43\137\x52\x65\x6c\x6f\141\x64\114\x69\156\153\"\x20\x69\x64\75\"\45\163\137\x52\x65\154\157\141\144\114\x69\156\x6b\"\x20\x68\162\145\146\75\"\x23\"\x20\164\141\x62\151\156\x64\145\170\75\"\45\144\"\x20\164\151\164\x6c\x65\75\"\x25\163\"\76\x3c\151\155\147\40\x63\x6c\x61\163\163\75\"\102\x44\x43\x5f\122\145\x6c\157\x61\x64\x49\143\157\156\"\40\x69\x64\x3d\"\x25\163\x5f\122\x65\x6c\157\141\144\x49\143\157\x6e\"\x20\163\162\143\75\"\x25\x73\"\x20\141\x6c\164\75\"\45\163\"\x20\57\76\x3c\57\x61\76\74\x21\x2d\x2d", $this->CaptchaStyleName, $this->TabIndex, $this->ReloadTooltip, $this->CaptchaStyleName, $this->ReloadIconUrl, $this->ReloadTooltip); if ($this->TabIndex != -1) { $this->TabIndex = $this->TabIndex + 1; } } else { $_Oa1ixaehdoo6v3t94e5b2 .= sprintf("\x20\40\40\55\x2d\x3e\x3c\x61\40\x63\154\x61\x73\x73\x3d\"\x42\x44\x43\x5f\x52\x65\154\x6f\x61\144\114\x69\x6e\x6b\"\x20\x69\144\x3d\"\x25\163\137\122\x65\154\157\141\144\114\151\x6e\x6b\"\40\x68\162\145\x66\x3d\"\x23\"\x20\x74\x69\164\x6c\x65\x3d\"\x25\163\"\76\74\151\155\147\x20\143\x6c\x61\x73\163\x3d\"\x42\x44\103\x5f\x52\145\154\157\x61\144\x49\x63\x6f\156\"\40\151\x64\x3d\"\45\x73\137\x52\x65\x6c\157\141\x64\x49\x63\x6f\156\"\40\163\x72\x63\75\"\x25\163\"\x20\x61\x6c\164\75\"\45\163\"\40\57\x3e\74\57\x61\x3e\x3c\41\55\55", $this->CaptchaStyleName, $this->ReloadTooltip, $this->CaptchaStyleName, $this->ReloadIconUrl, $this->ReloadTooltip); } $_Oa1ixaehdoo6v3t94e5b2 .= "\r\n"; } if ($this->SoundEnabled) { if ($this->CaptchaSoundAvailable) { if ($this->IsTabIndexSet()) { $_Oa1ixaehdoo6v3t94e5b2 .= sprintf("\40\40\x20\x2d\x2d\x3e\x3c\141\x20\162\145\x6c\75\"\x6e\x6f\x66\x6f\x6c\154\157\167\"\x20\x63\154\141\x73\x73\x3d\"\102\x44\x43\x5f\x53\157\x75\156\x64\x4c\151\x6e\x6b\"\40\x69\144\x3d\"\45\x73\137\x53\x6f\165\156\x64\114\x69\156\153\"\40\150\162\x65\146\x3d\"\x25\x73\"\40\164\141\x62\x69\x6e\144\145\170\75\"\x25\144\"\40\164\151\164\x6c\145\x3d\"\45\163\"\x3e\74\x69\155\x67\40\x63\x6c\141\163\x73\x3d\"\102\104\x43\137\x53\x6f\x75\x6e\x64\x49\x63\157\156\"\40\151\144\x3d\"\45\163\x5f\x53\157\165\x6e\144\111\x63\x6f\x6e\"\40\x73\x72\x63\x3d\"\x25\x73\"\x20\x61\x6c\164\x3d\"\45\163\"\40\57\76\x3c\x2f\141\76\74\41\x2d\55", $this->CaptchaStyleName, $this->CaptchaSoundUrl, $this->TabIndex, $this->SoundTooltip, $this->CaptchaStyleName, $this->SoundIconUrl, $this->SoundTooltip); } else { $_Oa1ixaehdoo6v3t94e5b2 .= sprintf("\x20\x20\x20\x2d\x2d\x3e\x3c\141\x20\x72\145\154\75\"\x6e\157\x66\x6f\154\154\x6f\x77\"\x20\x63\154\x61\163\163\75\"\102\x44\103\137\x53\x6f\x75\156\x64\x4c\151\x6e\153\"\40\x69\144\x3d\"\x25\163\x5f\123\x6f\165\x6e\144\114\x69\x6e\x6b\"\x20\150\x72\145\146\75\"\45\163\"\x20\x74\x69\164\154\145\x3d\"\x25\163\"\x3e\74\151\x6d\x67\40\143\154\141\163\x73\x3d\"\x42\104\103\137\x53\x6f\165\x6e\144\x49\x63\x6f\x6e\"\40\151\144\75\"\x25\163\137\123\157\x75\156\x64\111\143\157\156\"\40\163\x72\x63\75\"\45\163\"\x20\141\x6c\x74\75\"\45\x73\"\40\57\76\74\x2f\x61\x3e\x3c\41\x2d\x2d", $this->CaptchaStyleName, $this->CaptchaSoundUrl, $this->SoundTooltip, $this->CaptchaStyleName, $this->SoundIconUrl, $this->SoundTooltip); } $_Oa1ixaehdoo6v3t94e5b2 .= "\r\n"; } else if ($this->m_CaptchaConfiguration->IsWarnAboutMissingSoundPackages()) { $_Oa1ixaehdoo6v3t94e5b2 .= sprintf("\x20\x20\40\x2d\x2d\76\x3c\x61\x20\x74\141\162\x67\145\164\75\"\x5f\x62\x6c\x61\x6e\153\"\x20\143\154\141\x73\163\x3d\"\x42\104\103\137\x44\x69\x73\141\x62\x6c\x65\144\x4c\151\156\153\"\40\151\144\75\"\45\163\x5f\123\x6f\x75\156\144\x4c\151\x6e\153\"\40\150\162\x65\x66\x3d\"\43\"\x20\x74\141\142\151\156\x64\145\170\x3d\"\x25\x64\"\x3e\74\x69\155\x67\40\143\154\141\163\x73\x3d\"\102\x44\103\x5f\x53\x6f\x75\156\x64\x49\x63\x6f\156\"\40\x69\144\x3d\"\x25\163\137\x53\157\165\x6e\x64\111\143\157\156\"\40\x73\162\x63\x3d\"\x25\163\"\40\141\154\164\x3d\"\"\40\x2f\76\x3c\163\x70\x61\x6e\76\45\x73\74\x2f\163\160\141\156\x3e\74\57\141\76\x3c\x21\55\x2d", $this->CaptchaStyleName, self::TabIndexNotSet, $this->CaptchaStyleName, $this->SoundIconUrl, $this->SoundTooltip); $_Oa1ixaehdoo6v3t94e5b2 .= "\r\n"; } } if ($this->SoundEnabled) { $_Oa1ixaehdoo6v3t94e5b2 .= sprintf("\x20\x20\x20\55\55\76\x3c\144\x69\166\40\143\x6c\x61\x73\163\x3d\"\x42\104\103\137\x50\154\x61\143\145\150\x6f\154\x64\x65\162\"\x20\x69\144\x3d\"\x25\x73\"\x3e\46\141\x6d\x70\x3b\156\142\x73\x70\x3b\74\x2f\144\151\166\x3e\74\x21\x2d\x2d", $this->AudioPlaceholderClientId); } $_Oa1ixaehdoo6v3t94e5b2 .= "\x20\x2d\x2d\x3e\x3c\57\x64\x69\x76\76"; } protected function RenderScriptIncludes(&$_oelx3ogqp12cribkpnn65) { if ($this->AddScriptInclude) { $_oelx3ogqp12cribkpnn65 .= "\r\n"; $_oelx3ogqp12cribkpnn65 .= $this->GetScriptIncludeMarkup(); } } protected function RenderCssIncludes(&$_19vwsgq5aik60xj09fare5z1ma) { if ($this->AddCssInclude) { $_19vwsgq5aik60xj09fare5z1ma .= "\r\n"; $_19vwsgq5aik60xj09fare5z1ma .= "\x20\x20" . BDC_HtmlHelper::StylesheetInclude(SimpleCaptchaUrls::LayoutStyleSheetUrl($this->HandlerUrl)); $_19vwsgq5aik60xj09fare5z1ma .= "\r\n"; } } protected function RenderHiddenFields(&$_Iwbfh91m5p7691rew87j7qi2nh) { $_Iwbfh91m5p7691rew87j7qi2nh .= "\r\n"; $_Iwbfh91m5p7691rew87j7qi2nh .= BDC_HtmlHelper::HiddenField($this->ValidatingCaptchaIdKey, $this->CurrentCaptchaId); $_Iwbfh91m5p7691rew87j7qi2nh .= "\r\n"; $_Iwbfh91m5p7691rew87j7qi2nh .= BDC_HtmlHelper::HiddenField("\x42\x44\103\137\102\141\143\x6b\x57\x6f\162\153\141\x72\x6f\165\x6e\144\x5f" . $this->CaptchaStyleName, "\x30"); $_Iwbfh91m5p7691rew87j7qi2nh .= "\r\n"; if($this->UseM()) { $_Iwbfh91m5p7691rew87j7qi2nh .= BDC_HtmlHelper::HiddenField("\102\104\x43\x5f\110\x73\x5f" . $this->CaptchaStyleName, $this->_138mxgo0xb6a7jfa->GetHs()); $_Iwbfh91m5p7691rew87j7qi2nh .= "\r\n"; $_Iwbfh91m5p7691rew87j7qi2nh .= BDC_HtmlHelper::HiddenField("\x42\x44\103\x5f\x53\120\137" . $this->CaptchaStyleName, $this->_138mxgo0xb6a7jfa->GetSP()); $_Iwbfh91m5p7691rew87j7qi2nh .= "\r\n"; } } public function GenPw($_Ihehayn3oo89oehdm5tci) { return $this->_I6u5o4froccyolp1->PC->GenP($_Ihehayn3oo89oehdm5tci, $this->CodeTimeout); } public function Validate($_oiy6ldv2i9sp7a0jh9fjh = null, $_1lf1ppf5tm4ys1ij = null) { if (!isset($_oiy6ldv2i9sp7a0jh9fjh) && array_key_exists($this->_Obyotulctijg26yn, $_REQUEST)) { $_oiy6ldv2i9sp7a0jh9fjh = $_REQUEST[$this->_Obyotulctijg26yn]; $_oiy6ldv2i9sp7a0jh9fjh = trim($_oiy6ldv2i9sp7a0jh9fjh); } if (!isset($_1lf1ppf5tm4ys1ij) && array_key_exists($this->get_ValidatingCaptchaIdKey(), $_REQUEST)) { $_1lf1ppf5tm4ys1ij = $this->ValidatingCaptchaId; } $this->cw9qc($_1lf1ppf5tm4ys1ij); return $this->_I6u5o4froccyolp1->Validate($_oiy6ldv2i9sp7a0jh9fjh, $_1lf1ppf5tm4ys1ij, BDC_ValidationAttemptOrigin::Server, $this->UseM()); } public function AjaxValidate($_01trvdckd5h9hnc5 = null, $_0sycv6c9iglc5un3pjwb6ozjrd = null) { if (!isset($_01trvdckd5h9hnc5) && array_key_exists($this->_Obyotulctijg26yn, $_REQUEST)) { $_01trvdckd5h9hnc5 = $_REQUEST[$this->_Obyotulctijg26yn]; $_01trvdckd5h9hnc5 = trim($_01trvdckd5h9hnc5); } if (!isset($_0sycv6c9iglc5un3pjwb6ozjrd) && array_key_exists($this->get_ValidatingCaptchaIdKey(), $_REQUEST)) { $_0sycv6c9iglc5un3pjwb6ozjrd = $this->ValidatingCaptchaId; } $this->cw9qc($_0sycv6c9iglc5un3pjwb6ozjrd); return $this->_I6u5o4froccyolp1->Validate($_01trvdckd5h9hnc5, $_0sycv6c9iglc5un3pjwb6ozjrd, BDC_ValidationAttemptOrigin::Client, $this->UseM()); } private function cw9qc($_l2y5i3bmruq9yz3m) { if($this->UseM()) { $this->m_CaptchaPersistence->LoadPC($this->_I6u5o4froccyolp1, $_l2y5i3bmruq9yz3m); } } public function UseM() { return ($this->IsJavaScriptRequired() && ($this->UserInputID != null) && !$this->m_CaptchaConfiguration->IsTestModeEnabled()); } public static function IsFree() { return BDC_CaptchaBase::IsFree; } public static function LibInfo() { $_13u4inpi5kbab0dra0xsznz0po = ''; $_13u4inpi5kbab0dra0xsznz0po .= BDC_CaptchaBase::$ProductInfo["\156\141\155\145"] . "\x20\166\x65\162\x73\151\x6f\x6e\40" . BDC_CaptchaBase::$ProductInfo["\x76\x65\162\163\151\157\156"]; $_13u4inpi5kbab0dra0xsznz0po .= "\40" . (BDC_CaptchaBase::IsFree ? "\x46\x72\x65\145" : "\x45\156\x74\x65\162\160\162\x69\163\145"); $_13u4inpi5kbab0dra0xsznz0po .= "\40\x6c\x6f\x61\144\x65\144\40\142\x79\x20\120\x48\x50\x20\166\145\x72\x73\x69\157\156\x20" . PHP_VERSION; return $_13u4inpi5kbab0dra0xsznz0po; } public function __get($_lr6y9dk8ux21ijx9us82b) { if (method_exists($this->_I6u5o4froccyolp1, ($_i9vlz9j75umagiqmfb040 = "\x67\145\x74\137" . $_lr6y9dk8ux21ijx9us82b))) { return $this->_I6u5o4froccyolp1->$_i9vlz9j75umagiqmfb040(); } else if (method_exists($this, ($_i9vlz9j75umagiqmfb040 = "\x67\x65\x74\x5f" . $_lr6y9dk8ux21ijx9us82b))) { return $this->$_i9vlz9j75umagiqmfb040(); } else return; } public function __isset($_Opzmtb37jv3clbhyiwgqu67q8a) { if (method_exists($this->_I6u5o4froccyolp1, ($_1p661rgwqmiimsrp47hks = "\151\163\163\x65\x74\x5f" . $_Opzmtb37jv3clbhyiwgqu67q8a))) { return $this->_I6u5o4froccyolp1->$_1p661rgwqmiimsrp47hks(); } else if (method_exists($this, ($_1p661rgwqmiimsrp47hks = "\151\x73\163\145\x74\x5f" . $_Opzmtb37jv3clbhyiwgqu67q8a))) { return $this->$_1p661rgwqmiimsrp47hks(); } else return; } public function __set($_i5q2l9d6rqktj0u34zolxpgpqp, $_Ivkboclafg5wrjnhcrg2u) { if (method_exists($this->_I6u5o4froccyolp1, ($_i1l77nxb8l8ej1jf4crl7 = "\163\145\x74\137" . $_i5q2l9d6rqktj0u34zolxpgpqp))) { $this->_I6u5o4froccyolp1->$_i1l77nxb8l8ej1jf4crl7($_Ivkboclafg5wrjnhcrg2u); } else if (method_exists($this, ($_i1l77nxb8l8ej1jf4crl7 = "\x73\145\164\137" . $_i5q2l9d6rqktj0u34zolxpgpqp))) { $this->$_i1l77nxb8l8ej1jf4crl7($_Ivkboclafg5wrjnhcrg2u); } } public function __unset($_id95a87h1qce6rh1) { if (method_exists($this->_I6u5o4froccyolp1, ($_odhdsaau9q28eipc = "\165\x6e\x73\145\164\x5f" . $_id95a87h1qce6rh1))) { $this->_I6u5o4froccyolp1->$_odhdsaau9q28eipc(); } else if (method_exists($this, ($_odhdsaau9q28eipc = "\165\156\163\145\x74\x5f" . $_id95a87h1qce6rh1))) { $this->$_odhdsaau9q28eipc(); } } }