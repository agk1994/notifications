Openstream Magento Admin Notifications
=============

This is the custom solution for Openstream IS clients that we decided to put online. It gets latest RSS feeds and adds it as admin notifications. We are using it to pull feed from out blog but it can also pull feed for any other source.

The feed URL is configured in `etc/config.xml` file. The feed shall have the following format:

    <rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
        <channel>
            <atom:link href="_lint_to_itself" rel="self" type="application/rss+xml"/>
            <title>Feed Title</title>
            <link>_feed_website_url</link>
            <description>Feed Description</description>
            <language>de</language>
            <lastBuildDate>Mon Feb 11 12:00:01 2013</lastBuildDate>
            <ttl>300</ttl>
            <item>
                <title>Item Title</title>
                <link>_item_link</link>
                <severity>3</severity>
                <description><![CDATA[Content]]></description>
                <pubDate>_time_of_the_feed</pubDate>
            </item>
        </channel>
    </rss>
