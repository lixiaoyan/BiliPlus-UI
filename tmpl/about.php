<?php include "./inc/header.php"; ?>

<h1 class="title">关于 - BiliPlus</h1>
<div class="subtitle">我们所度过的每个平凡的日常，也许就是连续发生的奇迹。</div>

<section>
  <h2 class="title">BiliPlus 能够为我做什么？</h2>
  <div class="text indent">
    <p>BiliPlus 可以使您：</p>
    <ul>
      <li>方便地下载哔哩哔哩上的任意视频 / 弹幕文件</li>
      <li>选择您喜欢的弹幕播放器播放弹幕视频</li>
      <li>通过简洁的页面无干扰地欣赏弹幕视频</li>
      <li>快速搜索哔哩哔哩上的投稿 / 专题并直接下载 / 播放</li>
    </ul>
  </div>
</section>

<section>
  <h2 class="title">BiliPlus 是怎样实现这些功能 / 获得这些数据的？</h2>
  <div class="text indent">
    <p>目前，BiliPlus 中所有数据通过以下接口获得：</p>
    <ul>
      <li>哔哩哔哩弹幕网开放平台 (api.bilibili.tv) <span class="note">请参阅：<a href="http://docs.bilibili.cn/wiki/%E5%88%86%E7%B1%BB:API" target="_blank">分类:API - 嗶哩嗶哩百科</a></span></li>
      <li>哔哩哔哩弹幕网内部接口 (interface.bilibili.tv) <span class="note">请与 <a href="mailto:orz@loli.my" target="_blank">orz@loli.my</a> 联系</span></li>
      <li>吐槽弹幕网开放平台 (www.tucao.cc/api_v2) <span class="note">请参阅：<a href="http://www.tucao.cc/api_v2/api.txt" target="_blank">API_V2 参数使用格式说明</a></span></li>
      <li>哔哩哔哩唧唧 ASS 弹幕接口 (非开放接口) <span class="note">本接口为非开放接口，仅供哔哩哔哩唧唧及 BiliPlus 内部使用</span></li>
      <li>BiliSound MP3 下载接口 (www.bilibili.fm) <span class="note">站点升级中，请等待新版本 API</span></li>
    </ul>
  </div>
</section>

<section>
  <h2 class="title">为什么我总是遇到错误？</h2>
  <div class="text indent">
    <p>由于 BiliPlus 通过哔哩哔哩开放平台实时获取信息，因此 BiliPlus 的稳定性依赖于哔哩哔哩开放平台，我们将不断改进程序以为您提供更好的服务。<br />
    以下是对于一些常见错误代码的解释，您可以参照这些解释明白错误原因。</p>
    <ul>
      <li><strong class="dt">[ -1 ] - App key error.</strong> AppKey 错误，请直接刷新数据</li>
      <li><strong class="dt">[ -404 ] - No such doc.</strong> 文档不存在，请确定您输入了正确的 AV 号</li>
      <li><strong class="dt">[ -503 ] - Overspeed.</strong> API 请求过于频繁导致 B 站拒绝响应，可能 BiliPlus 目前访客过多，请稍后刷新页面即可</li>
    </ul>
  </div>
</section>

<section>
  <h2 class="title">位元之门</h2>
  <div class="text indent">
    <p>也许您会喜欢上这些位元？</p>
    <p>
      <a href="http://moe123.com/" title="萌导航" target="_blank"><img src="" alt="萌导航" /></a>
      <a href="http://moesound.com/" title="萌音" target="_blank"><img src="" alt="萌音" /></a>
      <a href="http://mengmao.org/" title="萌猫导航" target="_blank"><img src="" alt="萌猫导航" /></a>
    </p>
    <p>#欢迎热爱二次元的站长直接与我们联系申请链接，不接受任何纯粹为提高流量的申请#</p>
  </div>
</section>

<section>
  <h2 class="title">Open Source License</h2>
  <div class="text indent">
    <p>This site includes some files from open source projects, here is a list of these projects.</p>
    <ul>
      <li>
        <strong class="dt">ABPlayer HTML5</strong>
        <a href="https://github.com/jabbany/ABPlayerHTML5" target="_blank">https://github.com/jabbany/ABPlayerHTML5</a>
        <span class="note">MIT License</span>
        <ul>
          <li>
            <strong class="dt">ABPlayer HTML5 BiliBili ver.</strong>
            <a href="https://github.com/Zhuogu/ABPlayerHTML5-bilibili-ver" target="_blank">https://github.com/Zhuogu/ABPlayerHTML5-bilibili-ver</a>
            <span class="note">MIT License</span>
          </li>
        </ul>
      </li>
      <li>
        <strong class="dt">CommentCoreLibrary</strong>
        <a href="https://github.com/jabbany/CommentCoreLibrary" target="_blank">https://github.com/jabbany/CommentCoreLibrary</a>
        <span class="note">MIT License</span>
      </li>
      <li>
        <strong class="dt">MukioPlayerPlus</strong>
        <a href="http://code.google.com/p/mukioplayer" target="_blank">http://code.google.com/p/mukioplayer</a>
        <span class="note">MIT License</span>
      </li>
      <li>
        <strong class="dt">AssCompressor</strong>
        <a href="https://github.com/CHOSX/AssCompressor">https://github.com/CHOSX/AssCompressor</a>
        <span class="note">GNU General Public License</span>
      </li>
    </ul>
  </div>
</section>

<section>
  <h2 class="title">Open API</h2>
  <div class="text indent">
    <p>BiliPlus 提供开放 API 接口，通过简单易懂的方式分享站点资源，帮助开发者快速获取 BiliBili 视频数据。</p>
    <p><b>目前可用接口：</b></p>
    <ul>
      <li><strong class="dt">[ Download ]</strong> 提供指定 AVid 和 Page 下的视频基础信息及源视频、MP4 视频、XML 弹幕下载地址</li>
      <li><strong class="dt">[ HTML5 ]</strong> 提供指定 AVid 和 Page 的 HTML5 弹幕播放器 DIV，可直接镶入页面使用</li>
    </ul>
    <p><b>接口使用方式：</b></p>
    <blockquote>请直接和我们联系获取具体信息</blockquote>
  </div>
</section>

<section>
  <h2 class="title">联系我们</h2>
  <div class="text indent">
    <p>E-mail: tundrawork(at)gmail.com</p>
    <p>如需快速联系，请在邮件内附上 QQ 联系方式。</p>
  </div>
</section>

<section>
  <h2 class="title">权利声明</h2>
  <div class="text indent">
    <p>本站不提供任何视听上传服务，所有内容均来自正规视频站点所提供的公开引用资源。</p>
    <p>本站所提供动画番剧资源仅供测试，如需观看请访问放映权所有方网站，制作方需要您对正版的支持！</p>
  </div>
</section>

<footer>
  <p>Copyright &copy; 2014 Tundra Work <span class="divider">|</span> 除“开源项目文件”及“由外部接口获取的信息”外，对站点内容保留一切权力。</p>
</footer>

<?php include "./inc/footer.php"; ?>
