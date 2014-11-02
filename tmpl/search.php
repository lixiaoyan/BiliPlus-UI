<?php include "./inc/header.php"; ?>

<div class="search">
  <form method="get" action="">
    <div class="inner">
      <input type="type" name="keyword" placeholder="输入搜索关键词..." autofocus />
      <span class="action">
        <button type="submit">Go!</button>
      </span>
    </div>
    <section class="search-option search-tag">
      <input id="tag-1" type="radio" name="tag" value="" checked />
      <input id="tag-2" type="radio" name="tag" value="动画" />
      <input id="tag-3" type="radio" name="tag" value="音乐" />
      <input id="tag-4" type="radio" name="tag" value="舞蹈" />
      <input id="tag-5" type="radio" name="tag" value="游戏" />
      <input id="tag-6" type="radio" name="tag" value="科技" />
      <input id="tag-7" type="radio" name="tag" value="娱乐" />
      <input id="tag-8" type="radio" name="tag" value="鬼畜" />
      <input id="tag-9" type="radio" name="tag" value="电视剧" />
      <input id="tag-10" type="radio" name="tag" value="电影" />
      <input id="tag-11" type="radio" name="tag" value="新番" />
      <input id="tag-12" type="radio" name="tag" value="完结动画" />
      <ul class="button-group small">
        <li><label for="tag-1">不限</label></li>
        <li><label for="tag-2">动画</label></li>
        <li><label for="tag-3">音乐</label></li>
        <li><label for="tag-4">舞蹈</label></li>
        <li><label for="tag-5">游戏</label></li>
        <li><label for="tag-6">科技</label></li>
        <li><label for="tag-7">娱乐</label></li>
        <li><label for="tag-8">鬼畜</label></li>
        <li><label for="tag-9">电视剧</label></li>
        <li><label for="tag-10">电影</label></li>
        <li><label for="tag-11">新番</label></li>
        <li><label for="tag-12">完结动画</label></li>
      </ul>
    </section>
    <section class="search-option search-other">
      <input id="type-1" type="radio" name="type" value="" checked />
      <input id="type-2" type="radio" name="type" value="专题" />
      <input id="type-3" type="radio" name="type" value="Mylist" />
      <input id="type-4" type="radio" name="type" value="author" />
      <ul class="button-group small">
        <li><label for="type-1">综合</label></li>
        <li><label for="type-2">专题</label></li>
        <li><label for="type-3">Mylist</label></li>
        <li><label for="type-4">UP主</label></li>
      </ul>
      <span class="divider">|</span>
      <label for="order" class="label-title">排序:</label>
      <select id="order" name="order">
        <option value="default">综合</option>
        <option value="ranklevel">相关度</option>
        <option value="senddate">修改日期</option>
        <option value="pubdate">发布日期</option>
        <option value="click">点击</option>
        <option value="scores">评论</option>
        <option value="dm">弹幕数</option>
        <option value="stow">收藏数</option>
      </select>
      <span class="divider">|</span>
      <label for="size" class="label-title">分页:</label>
      <select id="size" name="size">
        <option value="5">5 个 / 页</option>
        <option value="10">10 个 / 页</option>
        <option value="20">20 个 / 页</option>
        <option value="30">30 个 / 页</option>
        <option value="50">50 个 / 页</option>
      </select>
    </section>
  </form>
</div>

<?php include "./inc/footer.php"; ?>
