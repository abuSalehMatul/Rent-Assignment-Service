<?php
require_once APPROOT . '/views/inc/teamPage/head.php';

?>
<body>
<div class="wrapper">
    <?php
    require_once APPROOT . '/views/inc/header.php';

    ?>

    <div class="p-2 main" data-page-name="p-2__as__writers-page">
        <div class="l-0">
            <div class="c-20">
                <ol class="c-20__ol" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li class="c-20__li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="c-20__a" href="index.html" itemscope="" itemtype="http://schema.org/Thing"
                           itemprop="item"><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="c-20__li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="name">Our Writers Team</span>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </div>
            <div class="p-2__h"><h1 class="h--md">Our Writers Team</h1>
                <div class="p-2__dd">
                    <div class="c-23 dropdown">
                        <button type="button" class="c-23__b dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true" id="writers-menu__mobile"><span
                                class="badge"></span> <span class="caret"></span></button>
                        <ul id="writers-menu-children__mobile" class="c-23__c dropdown-menu"
                            aria-labelledby="writers-menu__mobile"></ul>
                    </div>
                </div>
            </div>
            <div class="p-2__pl">
                <div class="p-2__f">
                    <div class="p-2__f-t">Sort by</div>
                    <div class="p-2__f-g">
                        <div class="btn-group" id="order-by-attribute-buttons">
                            <button class="btn btn-primary active" type="button" data-order-by="rating">Rating</button>
                            <button class="btn btn-primary" type="button" data-order-by="orders">Orders</button>
                            <button class="btn btn-primary" type="button" data-order-by="completion">Completion</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2__m">
                <div class="p-2__s">
                    <ul id="writers-menu" class="c-22">
                        <li class="c-22__li is--active" data-subject="All writers" data-subject-id=""><span
                                class="c-22__a" title="All writers"><span class="c-22__a-t">All writers</span> <span
                                    class="c-22__b">272</span></span></li>
                        <li class="c-22__li" data-subject="Agriculture" data-subject-id="101"><span class="c-22__a"
                                                                                                    title="Agriculture"><span
                                    class="c-22__a-t">Agriculture</span> <span class="c-22__b">137</span></span></li>

                        <li class="c-22__li" data-subject="Computer Sciences" data-subject-id="106"><span
                                class="c-22__a" title="Computer Sciences"><span
                                    class="c-22__a-t">Computer Sciences</span> <span class="c-22__b">231</span></span></li>
                        <li class="c-22__li" data-subject="Education" data-subject-id="107"><span class="c-22__a"
                                                                                                  title="Education"><span
                                    class="c-22__a-t">Education</span> <span class="c-22__b">251</span></span></li>
                        <li class="c-22__li" data-subject="Engineering" data-subject-id="108"><span class="c-22__a"
                                                                                                    title="Engineering"><span
                                    class="c-22__a-t">Engineering</span> <span class="c-22__b">198</span></span></li>
                        <li class="c-22__li" data-subject="Legal" data-subject-id="109"><span class="c-22__a"
                                                                                              title="Legal"><span
                                    class="c-22__a-t">Legal</span> <span class="c-22__b">258</span></span></li>
                        <li class="c-22__li" data-subject="Liberal Arts and Humanities" data-subject-id="110"><span
                                class="c-22__a" title="Liberal Arts and Humanities"><span class="c-22__a-t">Liberal Arts and Humanities</span> <span
                                    class="c-22__b">271</span></span></li>
                        <li class="c-22__li" data-subject="Medicine and Health" data-subject-id="111"><span
                                class="c-22__a" title="Medicine and Health"><span
                                    class="c-22__a-t">Medicine and Health</span> <span class="c-22__b">259</span></span>
                        </li>
                        <li class="c-22__li" data-subject="Physical Sciences" data-subject-id="112"><span
                                class="c-22__a" title="Physical Sciences"><span
                                    class="c-22__a-t">Physical Sciences</span> <span class="c-22__b">245</span></span></li>
                        <li class="c-22__li" data-subject="Psychology" data-subject-id="113"><span class="c-22__a"
                                                                                                   title="Psychology"><span
                                    class="c-22__a-t">Psychology</span> <span class="c-22__b">250</span></span></li>
                        <li class="c-22__li" data-subject="Other" data-subject-id="114"><span class="c-22__a"
                                                                                              title="Other"><span
                                    class="c-22__a-t">Other</span> <span class="c-22__b">265</span></span></li>
                    </ul>
                </div>
                <div class="p-2__c">
                    <ul id="writers-list" class="c-24">
                        <li class="c-24__li" data-writer-id="11510">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/11510.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/11510/b81e6ae9ae8b49c8cf71623423a38f09"
                                                    alt="Elite Writer" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Elite Writer <span
                                                    class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consectetur esse est ipsam laudantium, nulla placeat saepe? Ad, architecto ducimus ex, expedita ipsa libero obcaecati perspiciatis praesentium quia sequi suscipit.
                                    </div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">6090</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-1"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="114484">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/114484.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/114484/e2a27e871a2358a30183529703f60e10"
                                                    alt="Tutor Paul" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Tutor Paul <span
                                                    class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet animi atque, cumque deserunt dicta facilis hic inventore ipsum iusto minima mollitia nulla odio, omnis quasi quisquam, reiciendis rem vel?</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">3550</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-2"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="76353">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/76353.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/76353/5b6341feaa408d27d1ec0a7b4c8d3e6f"
                                                    alt="Sharp Writer" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Sharp Writer <span
                                                    class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cupiditate deleniti error, eveniet facere, fugiat incidunt natus, nisi odit perspiciatis reiciendis sunt. At cumque dolorem eaque molestiae sapiente. Non, quia.</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">2776</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-3"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="51958">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/51958.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/51958/efaf313d2165a407062fca8586c9f8b9"
                                                    alt="Tutor Richie" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Tutor Richie <span
                                                    class="c-24__wr-s false"></span></span></button></span>
                                    <div class="c-24__wr-d">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid aperiam asperiores, blanditiis delectus dolore est eum facilis harum in magni nihil nulla obcaecati quaerat quisquam quos rem sint sit!
                                    </div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">2515</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-4"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="45752">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/45752.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/45752/d11e8329b4f9a2aedd348c43d84e856d"
                                                    alt="Awesome Tutor" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Awesome Tutor <span
                                                    class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium debitis delectus deserunt dolores eaque fugit in inventore iusto labore maxime molestias natus, porro repellat. Aspernatur delectus dolore maiores necessitatibus soluta.
                                    </div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">2046</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-5"></div>
                        </li>

                    </ul>
                    <div id="more_writers" class="p-5__b-g" style="text-align:center;margin-top:20px">
                        <button type="button" class="button-outline__primary"><span class="button-text">Show more</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?GTM-KZ3B2L" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<noscript>
    <div style="display:inline"><img height="1" width="1" style="border-style:none" alt
                                     src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/878019161/?guid=ON&amp;script=0">
    </div>
</noscript>

<?php
require_once APPROOT . '/views/inc/footer.php';
?>

</body>

</html>
