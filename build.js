const fs = require('fs');
const path = require('path');

const headerPath = path.join(__dirname, 'include', 'header.php');
const footerPath = path.join(__dirname, 'include', 'footer.php');

const headerContent = fs.existsSync(headerPath) ? fs.readFileSync(headerPath, 'utf8') : '';
const footerContent = fs.existsSync(footerPath) ? fs.readFileSync(footerPath, 'utf8') : '';

// Find all root .php files
const files = fs.readdirSync(__dirname).filter(file => file.endsWith('.php'));

files.forEach(file => {
  const filePath = path.join(__dirname, file);
  let content = fs.readFileSync(filePath, 'utf8');

  // Replace php header & footer includes
  content = content.replace(/<\?php\s+include\s+['"]include\/header\.php['"];?\s*\?>/gi, headerContent);
  content = content.replace(/<\?php\s+include\s+['"]include\/footer\.php['"];?\s*\?>/gi, footerContent);

  // Write compiled HTML version
  const htmlFile = file.replace(/\.php$/, '.html');
  fs.writeFileSync(path.join(__dirname, htmlFile), content, 'utf8');

  // Also write HTML into .php file so direct /filename.php requests return HTML
  fs.writeFileSync(filePath, content, 'utf8');
});

console.log(`Successfully compiled ${files.length} PHP templates to static HTML for Vercel.`);
