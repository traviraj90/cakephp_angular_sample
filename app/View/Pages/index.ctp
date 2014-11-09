<div ng-class="'alert alert-' + message().type" ng-show="message().show">
    <button type="button" class="close" ng-click="message().show = false">×</button>
    <msg key-expr="message().text"></msg>
</div>
<ng-view></ng-view>
