export function trans(msgid, variables = {}) {
  const locale = document.querySelector("html").getAttribute("lang");
  if (
    window.strings !== undefined &&
    window.strings[locale] !== undefined &&
    window.strings[locale][msgid] !== undefined
  ) {
    return replaceVars(window.strings[locale][msgid], variables);
  } else {
    return replaceVars(msgid, variables);
  }
}

export function replaceVars(msgid, variables) {
  for (const [key, value] of Object.entries(variables)) {
    msgid = msgid.replace(`%${key}%`, value);
  }
  return msgid;
}
