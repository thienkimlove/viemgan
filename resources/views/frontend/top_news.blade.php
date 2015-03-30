<div class="box-topnews cf" data-ng-controller="NewsController">
    <div class="top-news">
        <article class="item">
            <a data-ng-href="<%goPost(topPost)%>" title="top" class="thumb-img">
                <img data-ng-src="<%goPostImage(topPost, '500_')%>" alt="<%topPost.title%>"/>
            </a>
            <h3>
                <a data-ng-href="<%goPost(topPost)%>" title="<%topPost.title%>" data-ng-bind="topPost.title"></a>
            </h3>
        </article>
    </div><!--//box-consult-->
    <div class="sub-news">
        <div class="data">
            <div class="item" data-ng-repeat="post in latestPost" data-ng-click="changeLatest(post, $event)">
                <a data-ng-href="<%goPost(post)%>" title="" class="thumb-img">
                    <img data-ng-src="<%goPostImage(post, '300_')%>" alt="<%post.title%>"/>
                </a>
                <h3>
                    <a data-ng-href="<%goPost(post)%>" title="<%post.title%>" data-ng-bind="post.title|limitTo:30"></a>
                </h3>
            </div>
            <div class="clear"></div>
        </div>
    </div><!--//box-partner-->
</div>