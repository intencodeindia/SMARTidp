/* @license GPL-2.0-or-later https://www.drupal.org/licensing/faq */
((Drupal, drupalSettings) => {
    Drupal.extlink = Drupal.extlink || {};
    Drupal.extlink.attach = (context, drupalSettings) => {
        if (typeof drupalSettings.data === 'undefined' || !drupalSettings.data.hasOwnProperty('extlink')) return;
        let extIconPlacement = 'append';
        if (drupalSettings.data.extlink.extIconPlacement && drupalSettings.data.extlink.extIconPlacement !== '0') extIconPlacement = drupalSettings.data.extlink.extIconPlacement;
        const pattern = /^(([^:]+?\.)*)([^.:]+)((\.[a-z0-9]{1,253})*)(:[0-9]{1,5})?$/;
        const host = window.location.host.replace(pattern, '$2$3$6');
        const subdomain = window.location.host.replace(host, '');
        let subdomains;
        if (drupalSettings.data.extlink.extSubdomains) subdomains = '([^/]*\\.)?';
        else if (subdomain === 'www.' || subdomain === '') subdomains = '(www\\.)?';
        else subdomains = subdomain.replace('.', '\\.');
        let whitelistedDomains = false;
        if (drupalSettings.data.extlink.whitelistedDomains) {
            whitelistedDomains = [];
            for (let i = 0; i < drupalSettings.data.extlink.whitelistedDomains.length; i++) whitelistedDomains.push(new RegExp(`^https?:\\/\\/${drupalSettings.data.extlink.whitelistedDomains[i].replace(/(\r\n|\n|\r)/gm,'')}.*$`, 'i'));
        }
        const internalLink = new RegExp(`^https?://([^@]*@)?${subdomains}${host}`, 'i');
        let extInclude = false;
        if (drupalSettings.data.extlink.extInclude) extInclude = new RegExp(drupalSettings.data.extlink.extInclude.replace(/\\/, '\\'), 'i');
        let extExclude = false;
        if (drupalSettings.data.extlink.extExclude) extExclude = new RegExp(drupalSettings.data.extlink.extExclude.replace(/\\/, '\\'), 'i');
        let extExcludeNoreferrer = false;
        if (drupalSettings.data.extlink.extExcludeNoreferrer) extExcludeNoreferrer = new RegExp(drupalSettings.data.extlink.extExcludeNoreferrer.replace(/\\/, '\\'), 'i');
        let extCssExclude = false;
        if (drupalSettings.data.extlink.extCssExclude) extCssExclude = drupalSettings.data.extlink.extCssExclude;
        let extCssInclude = false;
        if (drupalSettings.data.extlink.extCssInclude) extCssInclude = drupalSettings.data.extlink.extCssInclude;
        let extCssExplicit = false;
        if (drupalSettings.data.extlink.extCssExplicit) extCssExplicit = drupalSettings.data.extlink.extCssExplicit;
        const externalLinks = [];
        const mailtoLinks = [];
        const telLinks = [];
        const extlinks = context.querySelectorAll('a:not([data-extlink]), area:not([data-extlink])');
        extlinks.forEach((el) => {
            try {
                let url = '';
                if (typeof el.href === 'string') url = el.href.toLowerCase();
                else {
                    if (typeof el.href === 'object') url = el.href.baseVal;
                }
                const isExtCssIncluded = extCssInclude && (el.matches(extCssInclude) || el.closest(extCssInclude));
                if (url.indexOf('http') === 0 && ((!internalLink.test(url) && !(extExclude && extExclude.test(url))) || (extInclude && extInclude.test(url)) || isExtCssIncluded) && !(extCssExclude && el.matches(extCssExclude)) && !(extCssExclude && el.closest(extCssExclude)) && !(extCssExplicit && !el.closest(extCssExplicit))) {
                    let match = false;
                    if (!isExtCssIncluded && whitelistedDomains) {
                        for (let i = 0; i < whitelistedDomains.length; i++)
                            if (whitelistedDomains[i].test(url)) {
                                match = true;
                                break;
                            }
                    }
                    if (!match) externalLinks.push(el);
                } else {
                    if (el.tagName !== 'AREA' && !(extCssExclude && el.closest(extCssExclude)) && !(extCssExplicit && !el.closest(extCssExplicit)))
                        if (url.indexOf('mailto:') === 0) mailtoLinks.push(el);
                        else {
                            if (url.indexOf('tel:') === 0) telLinks.push(el);
                        }
                }
            } catch (error) {
                return false;
            }
        });
        const hasExtIcon = drupalSettings.data.extlink.extClass !== '0' && drupalSettings.data.extlink.extClass !== '';
        const hasAdditionalExtClasses = drupalSettings.data.extlink.extAdditionalLinkClasses !== '';
        Drupal.extlink.applyClassAndSpan(externalLinks, 'ext', hasExtIcon ? extIconPlacement : null);
        if (hasAdditionalExtClasses) Drupal.extlink.applyClassAndSpan(externalLinks, drupalSettings.data.extlink.extAdditionalLinkClasses, null);
        const hasMailtoClass = drupalSettings.data.extlink.mailtoClass !== '0' && drupalSettings.data.extlink.mailtoClass !== '';
        const hasAdditionalMailtoClasses = drupalSettings.data.extlink.extAdditionalMailtoClasses !== '';
        if (hasMailtoClass) Drupal.extlink.applyClassAndSpan(mailtoLinks, drupalSettings.data.extlink.mailtoClass, extIconPlacement);
        if (hasAdditionalMailtoClasses) Drupal.extlink.applyClassAndSpan(mailtoLinks, drupalSettings.data.extlink.extAdditionalMailtoClasses, null);
        const hasTelClass = drupalSettings.data.extlink.telClass !== '0' && drupalSettings.data.extlink.telClass !== '';
        const hasAdditionalTelClasses = drupalSettings.data.extlink.extAdditionalTelClasses !== '0' && drupalSettings.data.extlink.extAdditionalTelClasses !== '';
        if (hasTelClass) Drupal.extlink.applyClassAndSpan(telLinks, drupalSettings.data.extlink.telClass, extIconPlacement);
        if (hasAdditionalTelClasses) Drupal.extlink.applyClassAndSpan(mailtoLinks, drupalSettings.data.extlink.extAdditionalTelClasses, null);
        if (drupalSettings.data.extlink.extTarget) {
            externalLinks.forEach((link, i) => {
                if (!(drupalSettings.data.extlink.extTargetNoOverride && link.matches('a[target]'))) externalLinks[i].setAttribute('target', '_blank');
            });
            externalLinks.forEach((link, i) => {
                const val = link.getAttribute('rel');
                if (val === null || typeof val === 'undefined') {
                    externalLinks[i].setAttribute('rel', 'noopener');
                    return;
                }
                if (val.indexOf('noopener') > -1)
                    if (val.indexOf('noopener') === -1) externalLinks[i].setAttribute('rel', `${val} noopener`);
                    else {}
                else externalLinks[i].setAttribute('rel', `${val} noopener`);
            });
        }
        if (drupalSettings.data.extlink.extNofollow) externalLinks.forEach((link, i) => {
            const val = link.getAttribute('rel');
            if (val === null || typeof val === 'undefined') {
                externalLinks[i].setAttribute('rel', 'nofollow');
                return;
            }
            let target = 'nofollow';
            if (drupalSettings.data.extlink.extFollowNoOverride) target = 'follow';
            if (val.indexOf(target) === -1) externalLinks[i].setAttribute('rel', `${val} nofollow`);
        });
        if (drupalSettings.data.extlink.extNoreferrer) externalLinks.forEach((link, i) => {
            if (drupalSettings.data.extlink.extExcludeNoreferrer && extExcludeNoreferrer.test(link.getAttribute('href'))) return;
            const val = link.getAttribute('rel');
            if (val === null || typeof val === 'undefined') {
                externalLinks[i].setAttribute('rel', 'noreferrer');
                return;
            }
            externalLinks[i].setAttribute('rel', `${val} noreferrer`);
        });
        externalLinks.forEach((link, i) => {
            const oldTitle = link.getAttribute('title');
            let newTitle = drupalSettings.data.extlink.extTargetAppendNewWindowLabel;
            if (oldTitle !== null) {
                if (Drupal.extlink.hasNewWindowText(oldTitle)) return;
                newTitle = Drupal.extlink.combineLabels(oldTitle, newTitle);
            }
            externalLinks[i].setAttribute('title', newTitle);
        });
        Drupal.extlink = Drupal.extlink || {};
        Drupal.extlink.popupClickHandler = Drupal.extlink.popupClickHandler || (() => {
            if (drupalSettings.data.extlink.extAlert) return confirm(drupalSettings.data.extlink.extAlertText);
        });
        const _that = this;
        Drupal.extlink.handleClick = function(event) {
            const shouldNavigate = Drupal.extlink.popupClickHandler.call(_that);
            if (typeof shouldNavigate !== 'undefined' && !shouldNavigate) event.preventDefault();
        };
        externalLinks.forEach((val, i) => {
            externalLinks[i].removeEventListener('click', Drupal.extlink.handleClick);
            externalLinks[i].addEventListener('click', Drupal.extlink.handleClick);
        });
    };
    Drupal.extlink.hasNewWindowText = function(label) {
        return label.toLowerCase().indexOf(Drupal.t('new window')) !== -1;
    };
    Drupal.extlink.combineLabels = function(labelA, labelB) {
        labelA = labelA || '';
        labelB = labelB || '';
        const labelANoParens = labelA.trim().replace('(', '').replace(')', '');
        const labelBNoParens = labelB.trim().replace('(', '').replace(')', '');
        if (labelA === labelANoParens) {
            if (labelB === labelBNoParens) return `${labelA}, ${labelB}`;
            return `${labelA} ${labelB}`;
        }
        if (labelB === labelBNoParens) return `${labelB} ${labelA}`;
        return `(${labelANoParens}, ${labelBNoParens})`;
    };
    Drupal.extlink.applyClassAndSpan = (links, className, iconPlacement) => {
        let linksToProcess;
        if (drupalSettings.data.extlink.extImgClass) linksToProcess = links;
        else linksToProcess = links.filter((link) => {
            return link.querySelector('img, svg') === null;
        });
        for (let i = 0; i < linksToProcess.length; i++) {
            if (className !== '0') linksToProcess[i].classList.add(className);
            if (className === drupalSettings.data.extlink.mailtoClass && drupalSettings.data.extlink.extAdditionalMailtoClasses) linksToProcess[i].classList.add(drupalSettings.data.extlink.extAdditionalMailtoClasses);
            else if (className === drupalSettings.data.extlink.telClass && drupalSettings.data.extlink.extAdditionalTelClasses) linksToProcess[i].classList.add(drupalSettings.data.extlink.extAdditionalTelClasses);
            else {
                if (drupalSettings.data.extlink.extAdditionalLinkClasses) linksToProcess[i].classList.add(drupalSettings.data.extlink.extAdditionalLinkClasses);
            }
            linksToProcess[i].setAttribute('data-extlink', '');
            if (iconPlacement) {
                let link = linksToProcess[i];
                if (iconPlacement === 'append') {
                    let lastTextNode = link.lastChild;
                    let trailingWhitespace = null;
                    let parentNode = link;
                    while (lastTextNode)
                        if (lastTextNode.lastChild) {
                            parentNode = lastTextNode;
                            lastTextNode = lastTextNode.lastChild;
                        } else if (lastTextNode.nodeName === '#text' && parentNode.lastElementChild && lastTextNode.textContent.trim().length === 0) {
                        trailingWhitespace = lastTextNode;
                        parentNode = parentNode.lastElementChild;
                        lastTextNode = parentNode.lastChild;
                    } else break;
                    if (lastTextNode && lastTextNode.nodeName === '#text' && lastTextNode.textContent.length > 0) {
                        const lastText = lastTextNode.textContent;
                        const lastWordRegex = new RegExp(/\S+\s*$/, 'g');
                        const lastWord = lastText.match(lastWordRegex);
                        if (lastWord !== null) {
                            const breakPreventer = document.createElement('span');
                            breakPreventer.classList.add('extlink-nobreak');
                            breakPreventer.textContent = lastWord[0];
                            if (trailingWhitespace) {
                                breakPreventer.append(trailingWhitespace.textContent);
                                trailingWhitespace.textContent = '';
                            }
                            lastTextNode.textContent = lastText.substring(0, lastText.length - lastWord[0].length);
                            lastTextNode.parentNode.append(breakPreventer);
                            link = breakPreventer;
                        }
                    }
                }
                let iconElement;
                if (drupalSettings.data.extlink.extUseFontAwesome) {
                    iconElement = document.createElement('span');
                    iconElement.setAttribute('class', `fa-${className} extlink`);
                    if (className === drupalSettings.data.extlink.mailtoClass) {
                        if (drupalSettings.data.extlink.mailtoLabel) link.ariaLabel = drupalSettings.data.extlink.mailtoLabel;
                        iconElement.innerHTML = `<span class="${drupalSettings.data.extlink.extFaMailtoClasses}" data-extlink-placement="${iconPlacement}"></span>`;
                    } else if (className === drupalSettings.data.extlink.extClass) {
                        if (drupalSettings.data.extlink.extLabel) link.ariaLabel = drupalSettings.data.extlink.extLabel;
                        iconElement.innerHTML = `<span class="${drupalSettings.data.extlink.extFaLinkClasses}" data-extlink-placement="${iconPlacement}"></span>`;
                    } else {
                        if (className === drupalSettings.data.extlink.telClass) {
                            if (drupalSettings.data.extlink.telLabel) link.ariaLabel = drupalSettings.data.extlink.telLabel;
                            iconElement.innerHTML = `<span class="${drupalSettings.data.extlink.extFaTelClasses}" data-extlink-placement="${iconPlacement}"></span>`;
                        }
                    }
                } else {
                    iconElement = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                    iconElement.setAttribute('focusable', 'false');
                    iconElement.classList.add(className);
                    iconElement.setAttribute('data-extlink-placement', iconPlacement);
                    if (className === drupalSettings.data.extlink.mailtoClass) {
                        iconElement.setAttribute('aria-label', drupalSettings.data.extlink.mailtoLabel);
                        iconElement.setAttribute('viewBox', '0 10 70 20');
                        iconElement.innerHTML = `<metadata><sfw xmlns="http://ns.adobe.com/SaveForWeb/1.0/"><sliceSourceBounds y="-8160" x="-8165" width="16389" height="16384" bottomLeftOrigin="true"/><optimizationSettings><targetSettings targetSettingsID="0" fileFormat="PNG24Format"><PNG24Format transparency="true" filtered="false" interlaced="false" noMatteColor="false" matteColor="#FFFFFF"/></targetSettings></optimizationSettings></sfw></metadata><title>${drupalSettings.data.extlink.mailtoLabel}</title><path d="M56 14H8c-1.1 0-2 0.9-2 2v32c0 1.1 0.9 2 2 2h48c1.1 0 2-0.9 2-2V16C58 14.9 57.1 14 56 14zM50.5 18L32 33.4 13.5 18H50.5zM10 46V20.3l20.7 17.3C31.1 37.8 31.5 38 32 38s0.9-0.2 1.3-0.5L54 20.3V46H10z"/>`;
                    } else if (className === drupalSettings.data.extlink.extClass) {
                        iconElement.setAttribute('aria-label', drupalSettings.data.extlink.extLabel);
                        iconElement.setAttribute('viewBox', '0 0 80 40');
                        iconElement.innerHTML = `<metadata><sfw xmlns="http://ns.adobe.com/SaveForWeb/1.0/"><sliceSourceBounds y="-8160" x="-8165" width="16389" height="16384" bottomLeftOrigin="true"/><optimizationSettings><targetSettings targetSettingsID="0" fileFormat="PNG24Format"><PNG24Format transparency="true" filtered="false" interlaced="false" noMatteColor="false" matteColor="#FFFFFF"/></targetSettings></optimizationSettings></sfw></metadata><title>${drupalSettings.data.extlink.extLabel}</title><path d="M48 26c-1.1 0-2 0.9-2 2v26H10V18h26c1.1 0 2-0.9 2-2s-0.9-2-2-2H8c-1.1 0-2 0.9-2 2v40c0 1.1 0.9 2 2 2h40c1.1 0 2-0.9 2-2V28C50 26.9 49.1 26 48 26z"/><path d="M56 6H44c-1.1 0-2 0.9-2 2s0.9 2 2 2h7.2L30.6 30.6c-0.8 0.8-0.8 2 0 2.8C31 33.8 31.5 34 32 34s1-0.2 1.4-0.6L54 12.8V20c0 1.1 0.9 2 2 2s2-0.9 2-2V8C58 6.9 57.1 6 56 6z"/>`;
                    } else {
                        if (className === drupalSettings.data.extlink.telClass) {
                            iconElement.setAttribute('aria-label', drupalSettings.data.extlink.telLabel);
                            iconElement.setAttribute('viewBox', '0 0 181.352 181.352');
                            iconElement.innerHTML = `<metadata><sfw xmlns="http://ns.adobe.com/SaveForWeb/1.0/"><sliceSourceBounds y="-8160" x="-8165" width="16389" height="16384" bottomLeftOrigin="true"/><optimizationSettings><targetSettings targetSettingsID="0" fileFormat="PNG24Format"><PNG24Format transparency="true" filtered="false" interlaced="false" noMatteColor="false" matteColor="#FFFFFF"/></targetSettings></optimizationSettings></sfw></metadata><title>${drupalSettings.data.extlink.telLabel}</title><path xmlns="http://www.w3.org/2000/svg"  d="M169.393,167.37l-14.919,9.848c-9.604,6.614-50.531,14.049-106.211-53.404     C-5.415,58.873,9.934,22.86,17.134,14.555L29.523,1.678c2.921-2.491,7.328-2.198,9.839,0.811l32.583,38.543l0.02,0.02     c2.384,2.824,2.306,7.22-0.83,9.868v0.029l-14.44,10.415c-5.716,5.667-0.733,14.587,5.11,23.204l27.786,32.808     c12.926,12.477,20.009,18.241,26.194,14.118l12.008-13.395c2.941-2.472,7.328-2.169,9.839,0.821l32.603,38.543v0.02     C172.607,160.316,172.519,164.703,169.393,167.37z"/>`;
                        }
                    }
                }
                iconElement.setAttribute('role', 'img');
                iconElement.setAttribute('aria-hidden', drupalSettings.data.extlink.extHideIcons);
                link[iconPlacement](iconElement);
            }
        }
    };
    Drupal.behaviors.extlink = Drupal.behaviors.extlink || {};
    Drupal.behaviors.extlink.attach = (context, drupalSettings) => {
        if (typeof extlinkAttach === 'function') extlinkAttach(context);
        else Drupal.extlink.attach(context, drupalSettings);
    };
})(Drupal, drupalSettings);;