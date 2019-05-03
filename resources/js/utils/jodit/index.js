function extraStyle(name) {
  return {
    name: name,
    iconURL: `https://dummyimage.com/100x100/fff/f00.png&text=${name}`,
    exec(editor) {
      const e = editor.selection.area;
      console.log('he:', e);
      const quoteEls = e.getElementsByTagName('blockquote');
      console.log('hee:', quoteEls);
      if (quoteEls) {
        const l = quoteEls.length;
        for (let i = 0; i < l; i++) {
          if (!quoteEls[i].classList.contains('blog-quote')) {
            quoteEls[i].classList.add('blog-quote');
            quoteEls[i].innerHTML = `>> ${quoteEls[i].innerText} <<`;
          }
        }
      }
    },
  };
}


const extraButtons = [
  extraStyle('EX'),
];
const dummy = null;

export {
  extraButtons,
  dummy,
};
