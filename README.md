# PHPBB Extensions: Code Highlight
This is an extension for PHPBB forum that allows to use [highlight.js](https://highlightjs.org/) in forum posts.

## Installation
Dou to bad sync with composer there are some steps
1. Download version of repository that You are prefer
2. Unzip extension code to the ```ext``` directory of Your PHPBB board
3. Navigate to the ACP ```Customise -> Manage extensions```
4. Enable extension with name ```PHPBB Code Highlight```
5. [Optional] Navigate to the ACP ```Extensions -> PPHPBB Code Highlight -> Settings``` and setup list of languages and theme.

###### NOTE
Enabling of all languages will cause performance issues on clients side, because each langauge is loading as separate JS. 
So, if You are still needed to have all languages, then it will be nice to have:
1. HTTP2 on server
2. Static-Domain
3. CDN

## How to use in posts
To highlight code in post use new PHPBB tag [syntax]:
```ini
[syntax=cpp]
#include <tuple>

std::tuple<int, bool, float> foo()
{
	return std::make_tuple(128, true, 1.5f);
}

int main()
{
	std::tuple<int, bool, float> result = foo();
	int value = std::get<0>(result);
	int obj1;
	bool obj2;
	float obj3;
	std::tie(obj1, obj2, obj3) = foo();
}
[/syntax]
```

## Links
- [PHPBB Dev Docs](https://area51.phpbb.com/docs/dev/)
- [HighlightJS](https://highlightjs.org/)
- [Currently Used Here](https://forum.cryengine.com/)
- [PHPBB Events list](https://wiki.phpbb.com/Event_List)

## TODO
1. Proper store dependency from [HighlightJS repo](https://github.com/isagalaev/highlight.js)
2. Wrap PHPBB extension with composer
3. Write tests

## Thank You
Big thanks for community
